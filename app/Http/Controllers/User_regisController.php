<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff;
use Illuminate\Support\Facades\DB;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;

class User_regisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $objs = staff::paginate(15);
      $data['objs'] = $objs;
      $data['datahead'] = "Revised#1-Staff Name  List";
      return view('admin.userni.index', $data);
    }

    public function user_regised(){


        $objs = DB::table('staff')
                ->where('status', 1)
                ->paginate(15);

      $data['objs'] = $objs;
      $data['datahead'] = "Revised#1-Staff Name  List";
      return view('admin.userni.userni_ed', $data);
    }


    public function user_regis_search(Request $request){

        $this->validate($request, [
        'q' => 'required'
        ]);

        $search = $request->get('q');

        $get_count = DB::table('staff')
              ->select(
              'staff.*'
              )
              ->Where('emp_no', 'like', "%$search%")
              ->count();
        

      if($get_count != 0){

        $objs = DB::table('staff')
                ->select(
                'staff.*'
                )
                ->Where('emp_no', 'like', "%$search%")
                ->first();
         $data['objs'] = $objs;

         //dd($objs);
        return view('step-2', $data);       

      }else{
        return redirect(url('/'))->with('no_item','no data');
      }

    }


    public function user_regis_update(Request $request){

        $this->validate($request, [
        'group1' => 'required',
        'group2' => 'required',
        'group3' => 'required',
        'group4' => 'required',
        'group5' => 'required',
        'group6' => 'required',
        'group7' => 'required',
        'group8' => 'required',
        'group9' => 'required',
        'group10' => 'required',
        'group11' => 'required',
        'group12' => 'required',
        'group13' => 'required',
        'group14_1' => 'required',
        'group14_2' => 'required',
        'group14_3' => 'required',
        'group14_4' => 'required',
        'group14_5' => 'required'
        ]);

        $gen_b = 0;
        $gen_x = 0;
        $gen_y = 0;

        if($request['group1'] == 1){
            $gen_b += 1;
        }else if($request['group1'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group2'] == 1){
            $gen_b += 1;
        }else if($request['group2'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group3'] == 1){
            $gen_b += 1;
        }else if($request['group3'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group4'] == 1){
            $gen_b += 1;
        }else if($request['group4'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group5'] == 1){
            $gen_b += 1;
        }else if($request['group5'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group6'] == 1){
            $gen_b += 1;
        }else if($request['group6'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group7'] == 1){
            $gen_b += 1;
        }else if($request['group7'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group8'] == 1){
            $gen_b += 1;
        }else if($request['group8'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group9'] == 1){
            $gen_b += 1;
        }else if($request['group9'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group10'] == 1){
            $gen_b += 1;
        }else if($request['group10'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group11'] == 1){
            $gen_b += 1;
        }else if($request['group11'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }

        if($request['group12'] == 1){
            $gen_b += 1;
        }else if($request['group12'] == 2){
            $gen_x += 1;
        }else{
            $gen_y += 1;
        }


     $id = $request['user_id'];

     $package = staff::find($id);
     $package->q1 = $request['group1'];
     $package->q2 = $request['group2'];
     $package->q3 = $request['group3'];
     $package->q4 = $request['group4'];
     $package->q5 = $request['group5'];
     $package->q6 = $request['group6'];
     $package->q7 = $request['group7'];
     $package->q8 = $request['group8'];
     $package->q9 = $request['group9'];
     $package->q10 = $request['group10'];
     $package->q11 = $request['group11'];
     $package->q12 = $request['group12'];
     $package->q13 = $request['group13'];
     $package->q14_1 = $request['group14_1'];
     $package->q14_2 = $request['group14_2'];
     $package->q14_3 = $request['group14_3'];
     $package->q14_4 = $request['group14_4'];
     $package->q14_5 = $request['group14_5'];
     $package->gen_b = $gen_b;
     $package->gen_x = $gen_x;
     $package->gen_y = $gen_y;
     $package->save();


     $objs = DB::table('staff')
                ->select(
                'staff.*'
                )
                ->Where('id', $id)
                ->first();
         $data['objs'] = $objs;

         //dd($objs);
        return view('step-3', $data);

    }


    public function imageCropPost(Request $request)
    {

        $data = $request->image;

        if($data == 'data:image/png;base64,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'){

            return response()->json(['success'=>'no']);

        }

        $user_id = $request->user_id;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/assets/images/avatar/" . $image_name;

        file_put_contents($path, $data);

        $id = $user_id;

        $package = staff::find($id);
        $package->avatar = $image_name;
        $package->status = 1;
        $package->save();

        return response()->json(['success'=>'done']);
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_chart(Request $request)
    {
        $user_id = $request->id;
        $objs = DB::table('staff')
                ->select(
                'staff.*'
                )
                ->Where('id', $user_id)
                ->first();

              


                $arr[0] = [ 'label' => 'Gen B', 'data' =>[[1, $objs->gen_b]],'color' => '#0088cc' ];
                $arr[1] = [ 'label' => 'Gen X', 'data' =>[[1, $objs->gen_x]],'color' => '#2baab1' ];
                $arr[2] = [ 'label' => 'Gen Y', 'data' =>[[1, $objs->gen_y]],'color' => '#E36159' ];
             

              return response()->json($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_data($id)
    {
        $objs = DB::table('staff')
                ->select(
                'staff.*'
                )
                ->Where('id', $id)
                ->first();

                //dd($id);
         $data['objs'] = $objs;

   
        return view('step-4', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $obj = staff::find($id);
      $obj->delete();

    //  echo $objs->image;;
      return redirect(url('admin/user_regis'))
      ->with('delete','ทำการลบ บทความ สำเร็จ');



    }
}
