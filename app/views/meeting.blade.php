@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-action-alarm"></i> Meetings</h4>
            </div>

            <div class="col s12">
                <blockquote>
                	<p><b>Upcoming Meetings</b></p>

					<div class="row">
						<div class="col s4">
							<div class="card grey lighten-2">
								<div class="card-content black-text">
									<span class="card-title black-text">Ray Stoneham</span>
									<p>QM369</p>
									<p>31.03.2015 - 16:00</p>
								</div>
								<div class="card-action">
									<a href="#">Cancel</a>
								</div>
							</div>
						</div> 

						<div class="col s4">
							<div class="card grey lighten-2">
								<div class="card-content black-text">
									<span class="card-title black-text">Keeran Jameel</span>
									<p>Online</p>
									<p>01.04.2015 - 17:00</p>
								</div>
								<div class="card-action">
									<a href="#">Cancel</a>
								</div>
							</div>
						</div>
					</div>
                </blockquote>
                    
            </div>
        </div>
    </div>

    <div class="divider"></div>
    
    <div class="container">
    	<div class="row">
            <div class="col s12">
                <blockquote>
                	<p><b>Pending Meetings</b></p>

					<div class="row">
						<div class="col s4">
							<div class="card grey lighten-2">
								<div class="card-content black-text">
									<span class="card-title black-text">Ray Stoneham</span>
									<p>QA080</p>
									<p>31.04.2015 - 16:00</p>
								</div>
								<div class="card-action"><center>
									<a href="#">ACCEPT</a>
									<a href="">DECLINE</a></center>
								</div>
							</div>
						</div> 

						<div class="col s4">
							<div class="card grey lighten-2">
								<div class="card-content black-text">
									<span class="card-title black-text">Keeran Jameel</span>
									<p>Online</p>
									<p>01.04.2015 - 17:00</p>
								</div>
								<div class="card-action">
									<a href="#">Cancel</a>
								</div>
							</div>
						</div>
					</div>
                </blockquote>
                    
            </div>
        </div>
    </div>
    
    <div class="divider"></div>
    
    <div class="container">
    	<div class="row">
    		<div class="col s12">
    			<blockquote>
    				<p><b>Arrange Meeting</b></p>
    				
					<p>
						<label>Choose person</label>
					   		<select class="browser-default">
						   		<option value="" disabled selected>Tutor/Student List</option>
						   		<option value="1">Option 1</option>
						   		<option value="2">Option 2</option>
						   		<option value="3">Option 3</option>
						   	</select>
					</p>
					
					<p>
						<div class="input-field">
							<input id="text" type="text">
							<label for="text">Place selection</label>
						</div>
					</p>
					
					<p><input type="date" class="datepicker"></p>
					
					<p>
						<div class="input-field">
							<input id="time" type="time">
							<label for="time"></label>
						</div>
					</p>
					<p><div class="btn"><span>Submit</span></div><p>
    			</blockquote>
    		</div>
    	</div>
    </div>    	
@stop