<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
class WebarqController extends Controller
{
	public function __construct()
	{

	}

    public function handleUpload($request,$model,$fieldName,$resize=[])
    {
       $image = $request->file($fieldName);

        if(!empty($image))
        {
             if(!empty($model->$fieldName))
                {
                    @unlink(public_path('contents/'.$model->$fieldName));
                }

            $imageName = "hection-2017-".randomImage().'.'.$image->getClientOriginalExtension();

            $image = \Image::make($image);

            if(!empty($resize))
            {
            	$image = $image->resize($resize[0],$resize[1]);
            }

            $image = $image->save(public_path('contents/'.$imageName));

            return $imageName;

        }else{

            return $model->$fieldName;
        }
    }


    public function save($model,$inputs)
    {
    	$model->create($inputs);

    	return redirect(urlBackendAction('index'))->with('success','Data has been saved');
    }

    public function update($model,$inputs)
    {
    	$model->update($inputs);

    	return redirect(urlBackendAction('index'))->with('success','Data has been updated');
    }

    public function delete($model,$images=[])
    {
        try
        {
            $model->delete();

            foreach($images as $image)
            {
                @unlink(publicContents($image));
            }

            return redirect(urlBackendAction('index'))->with('success','Data has been deleted');

        }catch(\Exception $e){

            return redirect(urlBackendAction('index'))->with('info','Data cannot be deleted');
        }


    }

    public function publish($model)
    {
        if($model->status == 'y')
        {
            $status = 'n';
            $msg = 'Data has been Un Published';

        }else{
            $status = 'y';
            $msg = 'Data has been Published';
        }

        $model->update([
            'status' => $status,
        ]);

        return redirect(urlBackendAction('index'))->withSuccess($msg);
    }

    public function exectBanner($request,$resize=[])
    {
        $menu = webarq()->getMenu();
        $model = injectModel('Banner');
        $cek = $model->whereMenuId($menu->id)->first();

        if(!empty($cek->id))
        {
            $model = $cek;
        }else{
            $model = $model;
        }


        $inputs = $request->all();
        $inputs['menu_id'] = $menu->id;
        $inputs['banner']=$this->handleUpload($request,$model,'banner',$resize);

        if(!empty($cek->id))
        {
            $cek->update($inputs);
        }else{
            $model->create($inputs);
        }

        return redirect()->back()->with('success','Data has been updated');
    }

    public function getBanner($menuId="")
    {
        $banner = webarq()->getMenu($menuId)->banner;

        if(!empty($banner->id))
        {
            $result = $banner->banner;
        }else{
            $result = '';
        }

        return $result;
    }

    public function modelBanner($menuId="")
    {
        $banner = webarq()->getMenu($menuId)->banner;

        if(!empty($banner->id))
        {
            $result = $banner;
        }else{
            $result = injectModel('Banner');
        }

        return $result;
    }

		public function upload_file($inputs,$model,$request,$fieldName){
			$file = $model->file;
			if (isset($inputs['file'])){
	      if (File::exists('contents/'.$fieldName.'/'. $file))
	        File::delete('contents/'.$fieldName.'/'.$file);

	      $file = $request->file('file');
	      $destinationPath = 'contents/'.$fieldName.'/';
	      $fileName = "hection-2017-".$fieldName.'-'.str_random('5').'.'.$file->getClientOriginalExtension();
	      $request->file('file')->move($destinationPath, $fileName);
	      $inputs['file'] = $fileName;
	    }else{
	      $inputs['file'] = $file;
	    }
			return $inputs['file'];
		}
}
