<pre>
The OWASP Top 10 Web Application Security Risks for 2010 are:

    A1: Injection.
    A2: Cross-Site Scripting (XSS)
    A3: Broken Authentication and Session Management.
    A4: Insecure Direct Object References.
    A5: Cross-Site Request Forgery (CSRF)
    A6: Security Misconfiguration.
    A7: Insecure Cryptographic Storage.
   </pre>
   <hr>
    <?php 
   		if(isset($_POST['submit'])){
   			?>
   			<div class="comment"><?php echo $_POST['comment']?></div>
   			<?php 
   		}
   ?>  
   <hr>
   Add your comment
   <form method="post" action="blog.php">
   	<textarea name="comment"></textarea>
   	<input type="submit" name="submit" value="Post your comment">
   </form>
   
