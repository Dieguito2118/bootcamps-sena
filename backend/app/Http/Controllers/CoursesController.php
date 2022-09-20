<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Aqui se va mostrar proximamente todos los Cursos";
        return response()->json(["success" => true,
        "data" => Course::all()
        ] , 200 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //var_dump($request->all());
        //echo "<hr />";
        //var_dump($id);
        //Crear el Curso
        $curso = new Course();
        $curso->title = $request->title;
        $curso->description = $request->description;
        $curso->weeks = $request->weeks;
        $curso->enroll_cost = $request->enroll_cost;
        $curso->minimum_skill = $request->minimum_skill;
        $curso->bootcamp_id = $id;
        $curso->save();
        //Enviar Response
        return response()->json([
            "sucess" => true,
            "data" => $curso
        ] , 201 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([ "success" => true ,
                                  "data" => Course::find($id)
                                ] , 200) ;
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
        //1. Selecciona curso
        $course = Course::find ($id);
        //2.Actualizarlo
        $course->update(
            $request->all()
        );
        //3.Response
        return response()->json(["success" => true,
                    "data" => $course] , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //1.seleccionas el course
        $course = Course::find($id); 
        //2.eliminar ese course
        $course->delete();
        //3. response
        return response()->json( [ "success" => true ,
                                   "message" => "Course Eliminado",
                                   
                                   "data" => $course->id], 200);
    }
}
