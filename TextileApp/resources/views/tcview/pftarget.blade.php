@extends('layouts.sidebar')
@section('content')
<style type="text/css">
	.tinf
	{
		width:50px;
	}
/*	#content{
		margin-left: 5%;
	}*/
</style>
 <div id="main" class="row">
        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>
        <!-- main content -->
        <div id="content" class="col-md-8">
    <center><h1 style="color: #b30000;"> Physical & Financial Target </h1></center>
    <table style="width: 100%;">
 	<tr>
 		<td ></td><td>&nbsp&nbsp&nbsp&nbsp</td><th style="text-align: right;">District:{{ $district }}<br>Division:</th>
    </tr>
    <tr><td>&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp</td></tr>
    <tr>
    	<th>Financial Year<br>
    	<select class="form-control" id="sel1" name="fiscalyear">
        <option>2018-2019</option>
        <option>2019-2020</option>
        </select>
    	</th>
    	<td></td><th>Training Centre Name<br>
    	<form method="get" action="/fetchbatch" id="trainingcentre-form">
    	<select class="form-control" id="sel2" name="trainingcentre" onchange="document.getElementById('trainingcentre-form').submit()">
    	<option>-----Select-----</option>
    	@foreach ($tc as $t)
    	<option value="{{ $t->centre_id }}">{{ $t->centre_name }}</option>
        <!-- <option>Kolar</option> -->
        <!-- <option>Mysore</option> -->
        @endforeach
        </select>
        </form>
    	</th> 
    </tr>
    </tr>
    
    <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
    <tr>
    	<th>Batch Name:<br>
    	<form method="get" action="/fetchbatchinfo" id="batch-form">
    	<select class="form-control" id="sel2" name="batchname" onchange="document.getElementById('batch-form').submit()">
    	<option>-----Select-----</option>
    	@foreach ($batchinfo as $t)
    	<option value="{{ $t->batch_id }}">{{ $t->batch_id }}</option>
        <!-- <option>Kolar</option> -->
        <!-- <option>Mysore</option> -->
        @endforeach
        </select>
        </form>
    	<!-- <select class="form-control" id="sel2" name="batch">
        <option>Batch A</option>
        <option>Batch B</option>
        </select> -->
    	</th><th></th>
    	<th>Batch Timing<br><input type="text" class="form-control" id="time" name=""></th>
    </tr>

    <tr><td>&nbsp</td><td></td><td>&nbsp</td></tr>
    <tr>
    <tr>
    	<th>Category Type:{{ $centretype }}</th><td></td>
    	<th>Training Subject:</th>
    </tr>
    </tr>
</table> <br><br>


<table class="table table-bordered" >
	<tr>
		<th rowspan="2">Sl no</th><th rowspan="2">Category type</th><th colspan="3">Physical target in no</th><th colspan="3">Finacial target in Rs.</th>
	</tr>
	<tr>
		<td>Male</td><td>Female</td><td>Total</td><td>Male</td><td>Female</td><td>Total</td>
	</tr>
	<tr>
		<td>1</td><th>General</th>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>	
	</tr>
	<tr>
		<td>2</td><th>SPC</th>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>	
	</tr>
	<tr>
		<td>3</td><th>TSP</th>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>	
	</tr>
	<tr>
		<td></td><th>Total</th>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>
		<td><input class="tinf" type="" name=""></td>	
	</tr>
</table>
<button type="button" class="btn btn-default" style="margin-left: 
85%;">Submit</button>
        </div>
 </div>    
@stop