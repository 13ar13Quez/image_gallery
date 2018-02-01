<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Picture;

use Illuminate\Support\Facades\Input;
class UploadController extends Controller
{
    const PATH_PIC = 'uploads/original/';
    public function index()
    {
        $data['picture'] = Picture::enable()->get()->toArray();
        return view('upload/upload', $data);
    }

    public function upload(){
        if(\Request::ajax()) {
            if(Input::hasFile('file')){
                $file = Input::file('file');
                $picture = Picture::picName($file->getClientOriginalName())->enable()->get()->toArray();
                if (!$picture) {
                    $this->insertData($file);
                    $this->savePic($file);
                } else {
                    echo json_encode('error');
                }
            }
        }
    }

    public function deletePic()
    {
        if(\Request::ajax()) {
            $picName = trim(\Request::get('picName'));
            $picture = Picture::picName($picName)->enable()->get()->first();
            if ($picture) {
                $picture->status = 0;
                $picture->save();
                unlink(self::PATH_PIC.$picName);
            }
        }
    }

    private function insertData($file)
    {
        Picture::insert(
            [
                'pic_name' => $file->getClientOriginalName(),
                'pic_size' => $file->getClientSize(),
                'status' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
    }

    private function savePic($file)
    {
        $file->move(self::PATH_PIC, $file->getClientOriginalName());
    }
}