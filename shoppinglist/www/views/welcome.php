<?php require_once(getenv("PROJECT_ROOT") . "/views/partials/header.php"); ?>

<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Welcome to The Shoppinglist
			</h1>
			<h2 class="subtitle">
				The site where all your organizational wishes come true
			</h2>
		</div>
	</div>
</section>

<hr>

<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Organize</p>
      <p class="title"><i class="fa fa-shopping-cart"></i></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Prioritize</p>
      <p class="title"><i class="fa fa-balance-scale"></i></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Finish tasks</p>
      <p class="title"><i class="fa fa-edit"></i></p>
    </div>
  </div>
</nav>

<hr>

<section class="section">
    <div class="container">
		<h1 class="title">Create a new account</h1>
		<h2 class="subtitle">It's free and always will be</h2>
		
		<div class="tile is-ancestor">
		  
			<div class="tile is-parent">
				<div class="tile is-child">
					<article class="tile is-child message is-link is-medium">
						<div class="message-header">
							<p>pcmag.com reviewed<p>
						</div>
						<div class="message-body">
							<p>
								With a clean and simple UI and support for plenty of platforms, 
								The Shoppinglist is one of the most feature-rich task management apps on the market. 
								Users will be delighted how easy it is to manage your shopping tasks to efficiently.
							</p>
						</div>
					</article>
				</div>
			</div>
			
			<div class="tile is-parent is-1"></div>

			<div class="tile is-parent">
				<div class="tile is-child">
					<form action="/auth/register" method="POST">
						
						<div class="field">
							<p class="control has-icons-left">
								<input class="input is-large is-link" type="text" name="username" placeholder="Your username">
								<span class="icon is-small is-left">
									<i class="fa fa-user"></i>
								</span>
							</p>
						</div>
						
						<div class="field">
							<p class="control has-icons-left">
								<input class="input is-large  is-link" type="password" name="password" placeholder="New password">
								<span class="icon is-small is-left">
									<i class="fa fa-lock"></i>
								</span>
							</p>
						</div>

						<div class="field" style="margin-top: 4.5%;">
							<p class="control">
								<button class="button is-success is-large">
									Create an account @The Shoppinglist
								</button>
							</p>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>

<?php require_once(getenv("PROJECT_ROOT") . "/views/partials/footer.php"); ?>