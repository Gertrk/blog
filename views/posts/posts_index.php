<h1>Welcome!</h1>
<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>


<p>This is the welcome controller's default view file. It is located at <code>/views/welcome/posts_index.php</code>.</p>

<h2>Examples</h2>
<p>Below are some examples how to use Halo</p>

<h3>Adding pages</h3>
<p>For example, to To have the URL localhost/halo/<span class="label label-primary">posts/view/3</span> working:</p>
<ol>
	<li>Create new file <code>/controllers/<i>posts</i>.php</code></li>
	<li>In that file create <code>class posts</code> (lower case letters) which <code>extends Controller</code> (upper case letters)</li>
	<li>Create <code>function index()</code> within that class. This is the default action which will be called when no action is specified (e.g. just /posts). There you can set all the variables your view will need.</li>
	<li>Create <code>function view()</code> within that class.
		This is the <i>action</i> that gets run when users access <code>posts/view...</code>.
		Here you usually make a database query and put its result into a variable that is preceded with <code>$this</code>
		(so that you can later access it from the <i>view</i>).
		To access what is put after the action name on the URL (<code>3</code> in our example), use <code>$this->params[0]</code>.
		An example: <code>$this->post = get_one("SELECT * FROM post WHERE id={$this->params[0]}");</code></li>
	<li>Create new folder <code>/views/posts</code></li>
	<li>Create new file <code>/views/posts/posts_view</code></li>
	<li>Place content to that file. You could <code>&lt;?var_dump($post)?></code> for starters.</li>
</ol>

<h3>Sending data to server</h3>
<h4>jQuery $.post (Ajax) submit example</h4>
Fill the name field below and click <i>submit form using ajax</i>.
<form id="ajax-form">
Your name: <input type="text" placeholder="Write something here" name="name"/><br/>
</form>
<a href="#" onclick="clickme()">Submit form using ajax</a><br/>

The form containing the name field will be submitted to the
server by jQuery and server's response will be written to the box below.

<div class="well result"></div>



<h4pushitu>Traditional POST submit example</h4>
<p>Here is an example how to use traditional POST to send data to the server. Click Post after filling the form. The server will invoke <code>post::index_post()</code> action (which is in <code>/controllers/posts.php</code> file) which just dumps $_POST to the screen.</p>
<!-- Button for executing post -->
<form method="post">
    <input type="text" name="foobar"/>
    <input type="submit" value="Post"/>
</form>

    <?foreach( $posts as $post ):?>
    <div class="span8">
        <h1>Alice in Wonderland, part dos</h1>
        <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
            'Yes, we went to school in the sea, though you mayn't believe it—'
            'I never said I didn't!' interrupted Alice.
            'You did,' said the Mock Turtle.</p>
        <div>
            <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        </div>
        <hr>
        <h1>Revolution has begun!</h1>
        <p>'I am bound to Tahiti for more men.'
            'Very good. Let me board you a moment—I come in peace.' With that he leaped from the canoe, swam to the boat; and climbing the gunwale, stood face to face with the captain.
            'Cross your arms, sir; throw back your head. Now, repeat after me. As soon as Steelkilt leaves me, I swear to beach this boat on yonder island, and remain there six days. If I do not, may lightning strike me!'A pretty scholar,' laughed the Lakeman. 'Adios, Senor!' and leaping into the sea, he swam back to his comrades.</p>
        <div>
            <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        </div>
        <hr>
    </div>
    <?endforeach?>