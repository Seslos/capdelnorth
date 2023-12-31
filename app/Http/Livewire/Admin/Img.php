<?php

namespace App\Http\Livewire\Admin;

use App\Models\Galeria;
use Exception;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
class Img extends Component
{
use WithFileUploads;

    public $file;
protected $rules=[
    'image'=>'required|image|max:2048'
    
];


public function save(Request $request){

    $this->validate();
    if ($request->file('file')) {
        $url = base64_encode(file_get_contents($request->file('file')->path()));
        image()->create([
            'url'=>$url
        ]);
    }
    $galerias=Galeria::all();
    return redirect()->route('admin.galeria.index',compact('galerias'));
}

    public function render()
    {
        return view('livewire.admin.img');
    }




    public $image;

    public $files = [];

    public $listeners = [
        "single_file_uploaded" => 'singleFileUploaded',
        "add_file" => 'addFile',
        "clear_files" => 'clearFiles',
        "clear_file" => 'clearFile',
    ];

    public $validation_errors = [];

    public function singleFileUploaded($file){

        try {
            if($this->getFileInfo($file)["file_type"] == "image"){
                $this->image = $file;
            }else{
                session()->flash("error", "Uploaded file must be an image");
            }
        } catch (Exception $ex) {
            
        }
    }

    public function addFile($file){
        try {
            if($this->getFileInfo($file)["file_type"] == "image"){
                array_push($this->files, $file);
            }else{
                session()->flash("error", "Uploaded file must be an image");
            }
        } catch (Exception $ex) {
            
        }
    }

    public function clearFiles(){
        $this->files = [];
    }

    public function clearFile($index){
        unset($this->files[$index]);
    }

    public function getFileInfo($file){
        $info = [
            "decoded_file" => NULL,
            "file_meta" => NULL,
            "file_mime_type" => NULL,
            "file_type" => NULL,
            "file_extension" => NULL,
        ];
        try{
            $info['decoded_file'] = base64_decode(substr($file, strpos($file, ',') + 1));
            $info['file_meta'] = explode(';', $file)[0];
            $info['file_mime_type'] = explode(':', $info['file_meta'])[1];
            $info['file_type'] = explode('/', $info['file_mime_type'])[0];
            $info['file_extension'] = explode('/', $info['file_mime_type'])[1];
        }catch(Exception $ex){

        }

        return $info;
    }

    public function uploadFiles(){
        try {

            $rules=[
                'image' => 'required',
                'files' => 'required',
            ];
    
            $messages = [
                "image.required" => "Image must be selected.",
                "files.required" => "Choose atleast one file.",
            ];

            $validator = Validator::make([
                "image" => $this->image,
                "files" => $this->files,
            ],$rules, $messages);

            $validator->after(function ($validator) {

                if($this->getFileInfo($validator->getData()["image"])["file_type"] != "image"){
                    $validator->errors()->add('image', 'Must be an image');   
                }

            });
            
            if($validator->fails()){
                return $this->validation_errors = $validator->errors()->toArray();
            }else{

                // Single File Upload
                $file_data = $this->getFileInfo($this->image);
                $file_name = Str::random(10).'.'.$file_data['file_extension'];
                $result = Storage::disk('public')->put($file_name, $file_data['decoded_file']);
                
                //Multiple Files Upload
                foreach($this->files as $k => $v){
                    $file_data = $this->getFileInfo($v);
                    $file_name = Str::random(10).'.'.$file_data['file_extension'];
                    $result = Storage::disk('public')->put($file_name, $file_data['decoded_file']);
                }
                
            }

            session()->flash("success", "Files uploaded successfully.");
            $this->image = NULL;
            $this->files = [];

        } catch (Exception $ex) {
            session()->flash("error", "Error uploading files. Please try again.");
        }
    }
    

    
}
