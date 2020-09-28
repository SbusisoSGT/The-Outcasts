	<div class="subscribe-container">
		<span class="subscribe-header">
			Subscribe to mailing list
		</span>
		<div class="subscribe-form-container">
			<form action="/mailing-list/store" method="POST">
				@csrf
                <input type="email" name="email" class="input-form" placeholder="Email">
                <button type="button" class="submit-form"> Notify Me <i class="far fa-paper-plane"></i></button>
            </form>
		</div>
		<span class="subscribe-success"></span>
		<span class="subscribe-awesome"></span>
	</div>