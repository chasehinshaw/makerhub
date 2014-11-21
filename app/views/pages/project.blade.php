<!--  -->
@extends('layouts.default')

@section('main')
<!-- Breadcrumbs -->
	<div class="row">
		<div class="col-md-12 col-lg-12">
			
			<!-- Project BREADCRUB path -->
			<div class="breadcrumb-text">
        
        <ul>
          <li>
          	<a class="" href="#fakelink">
          		<span class="breadcrumb-arrow fui-arrow-left pull-left"></span>
          		MyHub
          	</a>
          </li>

          <li><a class="" href="#fakelink">Projects</a></li>

          <li>This Project Title</li>
        </ul>
      </div>

		</div>
	</div>

	<div class="row">
		<div class="col-md-9 col-lg-9">

			<!-- Project HEADER & SUMMARY -->
			<div class="project-summary panel panel-default">

				<img src="img/featured.jpg" alt="">
				<div class="panel-body">
					<h4 class="current-status">Completed</h4>
					<h1 class="project-title">This is the Project Title</h1>
					<h5 class="secondary">Last Updated on October 28 2014</h5>
					
					<h4 class="heading">Description</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Eius ipsa officiis numquam libero impedit maxime nesciunt, aliquam 
						culpa quas praesentium asperiores assumenda provident hic natus,
						ad. Ipsam sint, explicabo error. Lorem ipsum dolor sit amet, consectetur 
						adipisicing elit. Nihil culpa omnis...
						<br>
						<a class="" href="#fakelink">See All</a>
					</p>
					
					<h4 class="heading">Authors</h4>
					<p>
						<a href="#users-profile">Chase Hinshaw</a>, http://www.chasehinshaw.com
						<br>
						<a href="#users-profile">Adrian Zain</a>, http://www.bawlzz.com
					</p>

					<h4 class="heading">Original Idea</h4>
					<blockquote>
						<div class="panel-heading">
							<h3 class="panel-title">Why is spilt milk such a big deal?</h3>
						</div>

						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Quaerat dolorem odio ad quia possimus harum odit eos sed a 
							in explicabo magnam nihil itaque, totam placeat quidem, 
							doloribus laboriosam quasi!</p>
						</div>
					</blockquote>

					<a class="btn btn-sm btn-default"href="#fakelink">
						<span class="fui-edit"></span>
						Edit Project Summary
					</a>


				</div>
			
			</div>

			<div class="panel-phase panel panel-default">
				<div class="panel-heading">
					<div class="jumbotron">
					  <h1>Deployment </h1>
					  <p>These are posts about versioning and deployment.</p>
					  
					</div>
				</div>

				<div class="panel-body">

					<?php ### REPEAT THIS SECTION FOREACH POST ### ?>

					<div class="panel-post panel panel-default">
						<div class="panel-heading">
							
							<a class="btn btn-xs btn-default mlm pull-right" href="#edit-post-form ">
								<span class="fui-new"></span>
							</a>

							<h3 class="panel-title">This is a Project Post Title</h3>

							<h5 class="panel-title-info secondary">Posted on October 28 2014 by <a href="#user-profile">Chase Hinshaw</a></h5>


						</div>
						<div class="panel-body">
							<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and</p>
							<img src="img/featured.jpg" alt="">
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>

							<p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>
						</div>

						<div class="panel-comments panel panel-default">

							
							<div class="panel-heading">
								<ul class="list-inline">
									<li>
										<span class="fui-chat"></span>
									</li>
									<li>
										<h4>Comments</h4> 
									</li>
									<li class="pull-right">
										<span class="fui-triangle-down pull-right"></span>
									</li>
								</ul>
							</div>
							<!-- end Comment Accordian Header -->
							

							<div class="panel-body">
								
								<div class="media">
								  <a class="pull-left" href="#">
								    <img class="media-object" src="img/avatar-lg.jpg" alt="...">
								  </a>
								  <div class="media-body">
								    <a href="#username">
								    	<h4 class="media-heading">
								    		Señor Frog is my name
								    	</h4>
								    </a>
								    Posted on October 29, 2014
								    
								    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved</p>

								  </div>
								</div>

								<div class="media">
								  <a class="pull-left" href="#">
								    <img class="media-object" src="img/avatar-lg.jpg" alt="...">
								  </a>
								  <div class="media-body">
								    <a href="#username">
								    	<h4 class="media-heading">
								    		Señor Frog is my name
								    	</h4>
								    </a>
								    Posted on October 29, 2014
								    
								    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed.</p>

								  </div>
								</div>

								<!-- FORM - Post a New Comment -->
								<form class="comment-form" action="post">
									
			            <textarea class="form-control" placeholder="Add comment..." rows="5"></textarea>
				          
                  <button type="submit" class="btn btn-primary btn-wide">Post Comment</button>
                  
								</form>

							</div>

						</div>
					</div>
					<!-- end Comment Section -->

					<?php  ### END REPEAT ###  ?>

					<div class="panel-post panel panel-default">
						<div class="panel-heading">
							
							<a class="btn btn-xs btn-default mlm pull-right" href="#edit-post-form ">
								<span class="fui-new"></span>
							</a>

							<h3 class="panel-title">This is a Project Post Title</h3>

							<h5 class="panel-title-info secondary">Posted on October 28 2014 by <a href="#user-profile">Chase Hinshaw</a></h5>

						</div>
						
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure recusandae delectus? Error dignissimos omnis eaque tempore eum, soluta ullam excepturi! Optio magnam laudantium, facilis perferendis inventore dolorem vel totam!</p>
						</div>

						<div class="panel-comments panel panel-default">

							
							<div class="panel-heading">
								<ul class="list-inline">
									<li>
										<span class="fui-chat"></span>
									</li>
									<li>
										<h4>There are 0 Comments</h4> 
									</li>
									<li class="pull-right">
										<span class="fui-triangle-up pull-right"></span>
									</li>
								</ul>
							</div>
							<!-- end Comment Accordian Header -->
							

						</div>
					</div>

					<div class="panel-post panel panel-default">
						<div class="panel-heading">
							
							<a class="btn btn-xs btn-default mlm pull-right" href="#edit-post-form ">
								<span class="fui-new"></span>
							</a>

							<h3 class="panel-title">This is a Project Post Title</h3>

							<h5 class="panel-title-info secondary">Posted on October 28 2014 by <a href="#user-profile">Chase Hinshaw</a></h5>

						</div>
						
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure recusandae delectus? Error dignissimos omnis eaque tempore eum, soluta ullam excepturi! Optio magnam laudantium, facilis perferendis inventore dolorem vel totam!</p>
						</div>

						<div class="panel-comments panel panel-default">

							
							<div class="panel-heading">
								<ul class="list-inline">
									<li>
										<span class="fui-chat"></span>
									</li>
									<li>
										<h4>There are 0 Comments</h4> 
									</li>
									<li class="pull-right">
										<span class="fui-triangle-up pull-right"></span>
									</li>
								</ul>
							</div>
							<!-- end Comment Accordian Header -->
							

						</div>
					</div>

				</div>

			</div>

			<div class="panel-phase panel panel-default">
				
				<div class="panel-heading">
					<div class="jumbotron">
					  <h1>Development</h1>
					  <p>These are posts about the development of the project, including build instructions.</p>
					  
					</div>
				</div>

				<div class="panel-body">
					
					<div class="panel-post panel panel-default">
						<div class="panel-heading">
							
							<a class="btn btn-xs btn-default mlm pull-right" href="#edit-post-form ">
								<span class="fui-new"></span>
							</a>

							<h3 class="panel-title">This is a Project Post Title</h3>

							<h5 class="panel-title-info secondary">Posted on October 28 2014 by <a href="#user-profile">Chase Hinshaw</a></h5>

						</div>
					</div>

					<div class="panel-post panel panel-default">
						<div class="panel-heading">
							
							<a class="btn btn-xs btn-default mlm pull-right" href="#edit-post-form ">
								<span class="fui-new"></span>
							</a>

							<h3 class="panel-title">This is a Project Post Title</h3>

							<h5 class="panel-title-info secondary">Posted on October 28 2014 by <a href="#user-profile">Chase Hinshaw</a></h5>

						</div>
					</div>

					<div class="panel-post panel panel-default">
						<div class="panel-heading">
							
							<a class="btn btn-xs btn-default mlm pull-right" href="#edit-post-form ">
								<span class="fui-new"></span>
							</a>

							<h3 class="panel-title">This is a Project Post Title</h3>

							<h5 class="panel-title-info secondary">Posted on October 28 2014 by <a href="#user-profile">Chase Hinshaw</a></h5>

						</div>
					</div>

				</div>

			</div>

			<div class="panel-phase panel panel-default">
				
				<div class="panel-heading">
					<div class="jumbotron">
					  <h1>Ideation </h1>
					  <p>This is the original idea and discussions that created this project.</p>
					  
					</div>
				</div>

				<div class="panel-body">
					<blockquote>
						<div class="panel-heading">
							<h3 class="panel-title">Why is spilt milk such a big deal?</h3>
						</div>

						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Quaerat dolorem odio ad quia possimus harum odit eos sed a 
							in explicabo magnam nihil itaque, totam placeat quidem, 
							doloribus laboriosam quasi!</p>
						</div>
					</blockquote>
				</div>


			</div>


			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
            <span class="pull-right"><button type="button" class="closeall btn btn-success btn-xs">open/close all elements</button></span>
            <a href="#collapse-764" data-parent="#collapsible-" class="accordion-toggle" data-toggle="collapse">Headline 1</a>
					</h2>
				</div>
				

				<div id="collapse-764" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="panel panel-default">
							<div class="panel-heading">
									<h2 class="panel-title">
										<a href="#collapse-2" data-parent="#collapsible-764" class="accordion-toggle" data-toggle="collapse">Headline 1.1</a>
									</h2>
							</div>
							<div id="collapse-2" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Text....</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a href="#collapse-766" data-parent="#collapsible-764" class="accordion-toggle" data-toggle="collapse">Headline 1.2</a>
								</h2>
							</div>
							<div id="collapse-766" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Text....</p>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
			       <span class="pull-right"><button type="button" class="closeall btn btn-success btn-xs">open/close all elements whithin this element</button></span>
						<a href="#collapse-767" data-parent="#collapsible-" class="accordion-toggle" data-toggle="collapse">Headline 2</a>
					</h2>
				</div>
				<div id="collapse-767" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Text 2</p>
					</div>
				</div>
			</div>

		</div>
	

	
		<div class="col-md-3 col-lg-3">
			
			<section class="sidebar clearfix">
        
				<!-- NEW OBJECT / PROJECT / IDEA section -->
        <div class="sidebar-btn-group ">
         
          <a href="" class="btn btn-primary btn-block">
            <span class="fui fui-gear"></span>
            Make New Post
          </a>

        </div>


        <li class="divider"></li>


        <ul class="nav nav-list ">
          <li class="nav-header">MyHub</li>
          <li class="active">
            <a href="#fakelink">
              <span class="fui-star-2 text-default"></span>
              Project Overview
            </a>
          </li>
          <li>
            <a href="#fakelink">
              <span class="fui-user text-default"></span>
              Project Activity
              <span class="badge pull-right">19</span>
            </a>
          </li>
          <!-- end Secondary Navigation -->


          <li class="divider"></li>
					

					<!-- SUBSCRIBE ACCORDIAN LIST -->
          <li class="subscribe-list nav-header">
              <span>
                Objects in Project
                <a href="#"><span class="icon fui-gear pull-right"></span></a>
              </span>
          </li>

					<li class="accorian-item">
            <a href="#" title="">
            <span>
              <img src="img/avatar_32.jpg" class="avatar-tiny" alt="">
              This little thing
              <span class="fui-arrow-right pull-right"></span>
            </span>
            </a>
          </li>

          <li class="accorian-item">
            <a href="#" title="">
            <span>
              <img src="img/avatar_32.jpg" class="avatar-tiny" alt="">
              That Thing
              <span class="fui-arrow-right pull-right"></span>
            </span>
            </a>
          </li>

       
        </ul>
        
      </section>
			
		</div>
	</div>

@stop

@section('sidebar')
<!--  -->
@stop