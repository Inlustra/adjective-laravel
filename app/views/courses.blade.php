@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-av-my-library-books"></i> Project (COMP1699)</h4>
            </div>

            <div class="col s12 m6 12">
                <blockquote>
                	<p><b>Course Leader</b></p>

                    <p><b>Tutor</b></p>

                    <p><b>Deadline</b></p>

                    <p><b>Download</b></p>
                </blockquote>
                    
            </div>
            <div class="col s12 m6 12">
                <blockquote>
                	<p><b>Ray Stoneham</b></p>

                    <p><b>Ray Stoneham 2</b></p>

                    <p><b>31/03/2015</b></p>

                    <p><b><a href="">Coursework Specification</a></b></p>
				</blockquote>
            </div>
        </div>
    </div>
    <br>

    <div class="divider"></div>
    
    <div class="container">
    	<div class="row">
    		<div class="col s12">
    			<blockquote>
    			<p>Welcome to COMP1640 where you will apply your skills and knowledge in a realistic group project using agile scrum 								   methodology to develop a specific enterprise web system. The team will be able to decide on the appropriate technology 							   (e.g. PHP, ASP.NET, SharePoint), and you will be able to specialise as designer, programmer, etc.</p>
    			</blockquote>
    		</div>
    	</div>
    </div>
    
    <div class="diviver"></div>
    
    <div class="container">
    	<div class="row">
			<div class="col s12">
				<blockquote>
				<p><b>Upload your work</b></p>
				<p><div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<textarea id="textarea1" class="materialize-textarea"></textarea>
									<label for="textarea1">Comment your file</label>
								</div>
							</div>
								<label>Select upload type</label>
								<select class="browser-default">
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Weekly</option>
									<option value="2">Interim</option>
									<option value="3">Coursework</option>
								</select>	
						</form>
						<div class="btn"><span>Submit</span></div>
				</div>			
				</blockquote>
			</div>
    	</div>
    </div>
@stop