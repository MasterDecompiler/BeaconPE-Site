<?php
	include_once 'includes/header.php';
	
	//Show Fixed Navbar
	echo '<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            			<span class="sr-only">Toggle navigation</span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            	</button>
	            	<a class="navbar-brand">BeaconPE</a>
	            </div>
	            <div class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav">
	            		<li><a data-toggle="modal" data-target="#downloads">Downloads </a></li>
	            		<li><a data-toggle="modal" data-target="#forums">Forums </a></li>
						<li><a data-toggle="modal" data-target="#webchat">WebChat </a></li>
	            	</ul>
	            </div>
			</div>
	     </div>';
	
	//Main Site Text
	echo '<div class="container">
			<div class="jumbotron">
				<center>
					</br>
					<noscript>
						<div class="alert alert-danger">
							This site uses JavaScript to run which is not enabled on your browser!
						</div>
					</noscript>
					<h1>BeaconPE - MinecraftPE Server Software</h1>
					<p>BeaconPE is a free, open-source server software for Minecraft: Pocket Edition written in Java.  It has a built-in Plugin API for developers to allow you to customize your server in any way you can imagine.</p>
					</br>
					<hr>
					<h1>BeaconPE Requirements</h1>
					<p>
						In order to run the BeaconPE software, you will need the <a data-toggle="modal" data-target="#java">Java Software</a> by <a data-toggle="modal" data-target="#oracle">Oracle</a>.  We recommend you use the latest version of Java to minimize problems that may occur while using BeaconPE.</br>
					</p>
				</center>
			</div>
		  </div>';
	
	//Show Downloads
	echo '<div class="modal fade" id="downloads" tabindex="-1" role="dialog" aria-labelledby="downloadsLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="downloadsLabel">BeaconPE Downloads</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								<a class="btn btn-danger" href="download/software/0001/BlockServer.jar">Build #0001</a>
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-warning" href="download/start/windows/start.bat">Windows Start File</a>
							<a type="button" class="btn btn-success" href="download/start/mac-linux/start.sh">Mac/Linux Start File</a>
						</center>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Forums Link
	echo '<div class="modal fade" id="forums" tabindex="-1" role="dialog" aria-labelledby="forumsLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="forumsLabel">BeaconPE Forums</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the BeaconPE Forums?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="forums">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show WebChat
	echo '<div class="modal fade" id="webchat" tabindex="-1" role="dialog" aria-labelledby="webchatLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="webchatLabel">BeaconPE WebChat</h4></center>
					</div>
					<div class="modal-body">
						<center><iframe src="http://webchat.freenode.net?channels=%23BeaconPE&uio=d4" width="550" height="500"></iframe></center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Twitter Link
  /*
	echo '<div class="modal fade" id="twitter" tabindex="-1" role="dialog" aria-labelledby="twitterLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="twitterLabel">BeaconPE Twitter</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the BeaconPE Twitter page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="https://twitter.com/BeaconPE">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show GitHub Link
	echo '<div class="modal fade" id="github" tabindex="-1" role="dialog" aria-labelledby="githubLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="githubLabel">BeaconPE GitHub</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the BeaconPE GitHub page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="https://github.com/BeaconPE">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
   */
	
	//Show Java Link
	echo '<div class="modal fade" id="java" tabindex="-1" role="dialog" aria-labelledby="javaLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="javaLabel">Java Software</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the Java Software download page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="http://java.com/download">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Oracle Link
	echo '<div class="modal fade" id="oracle" tabindex="-1" role="dialog" aria-labelledby="oracleLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="oracleLabel">BeaconPE GitHub</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the Oracle website?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="http://oracle.com/">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	include_once 'includes/footer.php';
?>
