  <nav class="navbar navbar-default ">
        <h1 class="text-center " href="# "> Help </h1>
    </nav>
<div class="container">
<h2>FAQ - Frequently Asked Questions</h2>
<br><br>
<p><b><i>What's with the trophy I see sometimes on some user's profiles?</i></b></p>
<p>That's the top collaborator medal. It goes to the user with the highest number of contribution points, so if you want it as well, make sure you create good content!</p>
<br>
<p><b><i>How do I check my post history?</i></b></p>
<p>Click on the profile and on the side menu on the left click comment history</p>
<br>
<p><b><i>How do I send messages?</i></b></p>
<p>Click on the profile and on the side menu click inbox, in the inbox page click compose message</p>
<br>
<p><b><i>How do I make friends?</i></b></p>
<p>Click on the name of the user you wanna befriend in the comments or articles or wherever else you might find him and in that user's profile, click the add friend button</p>
<br><br>

<h4><b>If any question or problem remains or arises, you can always send a private message to the administration through here </b></h4>
<br><br>
{if isset($smarty.session.user_id)}
<div class="container" style="width:60%">
        <form class="form-horizontal" id="fpassw" method="post" action="{$BASE_URL}actions/users/send.php">
         <fieldset class="responsive-fieldset">
            <div class="form-group">
               <label for="to"> To: <br>  </label>
				<div class="col-sm-12">
                <input type="text" id="receiver" class="form-control"  name="receiver" value="johnny_boy" disabled>
                </div>
            </div>
         <div class="form-group">
				<label for="from"> From: <br>  </label>
				<div class="col-sm-12">
					<input type="text" id="sender" class="form-control"  name="sender" value="{$USERNAME}" disabled>
				</div>
		</div>
        <div class="form-group">
                        <label>Message:</label>
                         <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="20" id="message" name="message" required></textarea>
                        </div>
                        <div class="col-sm-12">
                        <br><br>
                         </div>
          </div>
                <button class="btn btn-lg btn-success btn-block center-block" style="width:50%"type="submit" value="submit" >Send Message</button>
                <br>
            </fieldset>
        </form>
      
        </div>
{else}
<h3>If you wish to contact the administration, create an account first by clicking on the register link in the header</h3
{/if}
</div>
<br>
<br>