@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                                        {{ csrf_field() }}
                    <form action="/insert" method="POST">
           <!-- <table>
                <tr>
                    <td>Post Title: </td>
                    <td><input type="text" name="title">    </td>
                </tr>
                <tr>
                    <td>Post Description:   </td>
                    <td><textarea" rows="10" cols="30" name="desc"> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"> </td>
                </tr>
           </table> -->


           <LABEL>POST TITLE</LABEL> 
           <input type="text" name="title">
           <br><br>
           <label>POST DESCRIPTION</label><br>
            <textarea name="message" rows="10" cols="30"></textarea>
           <br>
           <input type="submit">
       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
