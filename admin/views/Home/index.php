<div class="container-fluid">
<h3>System Dashboard</h3>
<div class="row-fluid">
	<div class="span6">
		<table class="table table-bordered table-issue">
          <thead>
          	<tr>
              <th class="header-title" colspan="4">Filter Results: Tasks Assigned to me</th>
            </tr>
            <tr>
              <th class="span2">Key</th>
              <th class="span2">Project</th>
              <th class="span2">Status</th>
              <th class="span6">Summarry</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">QDOS-160</a></td>
              <td><a href="#">QDOS Module</a></td>
              <td><span class="label">Default</span></td>
              <td><a href="#">Reid Cycles: Sync order doesn't work</a></td>
            </tr>
            <tr>
              <td><a href="#">QDOS-156</a></td>
              <td><a href="#">QDOS Module</a></td>
              <td><span class="label label-success">Success</span></td>
              <td><a href="#">Check to know why export order still running on Adore qdos</a></td>
            </tr>
            <tr>
              <td><a href="#">QDOS-134</a></td>
              <td><a href="#">QDOS Module</a></td>
              <td><span class="label label-warning">Warning</span></td>
              <td><a href="#">Check and fix bugs in QDOS module</a></td>
            </tr>
            <tr>
              <td><a href="#">GIT-60</a></td>
              <td><a href="#">GOS Internal Activities</a></td>
              <td><span class="label label-important">Important</span></td>
              <td><a href="#">Project meeting</a></td>
            </tr>
            <tr>
              <td><a href="#">GIT-40</a></td>
              <td><a href="#">GOS Internal Activities</a></td>
              <td><span class="label label-info">Info</span></td>
              <td><a href="#">Project discussion</a></td>
            </tr>
            <tr>
              <td><a href="#">CHRIS-180</a></td>
              <td><a href="#">Christians</a></td>
              <td><span class="label label-inverse">Inverse</span></td>
              <td><a href="#">Footer - Fix the distance</a></td>
            </tr>
          </tbody>
        </table>
	</div>
	<div class="span6">
		<table class="table table-bordered table-issue">
          <thead>
          	<tr>
              <th class="header-title" colspan="4">Filter Results: Tasks Assigned to me</th>
            </tr>
            <tr>
              <th>Key</th>
              <th>Project</th>
              <th>Status</th>
              <th>Summarry</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@TwBootstrap</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
	</div>
</div>
<p>Welcome to what is probably one of the most basic PHP MVC frameworks you'll find. The current view you're seeing exists in /views/home/index.php.</p>
<p>The idea of oCoder Framework (I honestly couldn't think of a better name) is for PHP developers not necessarily versed on the basics of the Model View Controller pattern to have a framework clean of clutter and unnecessary addons, so they can focus on exploring the fundamentals of the pattern while having a working example from the very first step.</p>
<p>oCoder Framework comes with a .htaccess file built to allow /controller/action/id style URL requests, error and home controller and model classes which act as examples, and a basic main template file. There are also four classes and index.php, which form the underlying structure of the framework.</p>

<h2>Tips</h2>
<ul>
    <li>Check out how HomeController and ErrorController are coded to understand how the MVC components of this framework tie together - pay particular note to how they extend from BaseController, and how they interact with the view object ($this->view).</li>
    <li>All controllers should be class files contained in the controller directory, and share the same filename as the controller used in the URL, with a PHP extension e.g. controllers/home.php. The actual class name of a controller should be NameController e.g. HomeController, ErrorController, etc.</li>
    <li>All controllers must extend from the BaseController class. Controllers which don't will produce an error.</li>
    <li>All directories under /views should share the name of the controller class, with an upper case first letter, and minus the 'Controller' part, e.g. Home, Error, etc (upper case first letter is important on Linux).</li>
    <li>If you want any view to be shown without using a main template, pass a boolean false as the second argument in the $this->view->output() call of your controller methods (where the first argument is the data being send to the view).</li>
    <li>If you define a string as $this->view->output()'s second argument, it will look for that string as /views/stringvalue.php for that view's template. "maintemplate" is the default value and hence views/maintemplate.php is the default template file.</li>
    <li>If you extend a model class from BaseModel, it will have access to the ViewModel object via $this->viewModel, which has a method, set(), that allows you to dynamically add properties to the $this->viewModel object. E.g. $this->viewModel->set('pageTitle', 'Home') would store the string 'Home' in $this->viewModel->pageTitle; .</li>
    <li>In general, the framework is designed for models to extend from BaseModel and populate $this->viewModel with the data you want passed to the view. As such, after populating $this->viewModel, model methods should return $this->viewModel. However, the framework does not impose any requirements on how you handle your models, this is just a guideline.</li>
    <li>Whatever you pass as the first argument of $this->view->output() is available as the variable $viewModel in templates and views. If the variable being passed in is of type ViewModel as talked about in the point above, then in your views and templates you can retrieve values using $viewModel->get('name'), where 'name' is the name of the property. For instance, in the above example where the property 'pageTitle' was set, retrieving this would be done as $viewModel->get('pageTitle'). </li>
</ul>
<h2>Where to now</h2>
<p>If you intend to expand on this framework, your first step is to probably think about where you'll store images, css files and js files (/content and /js ?), and to modify the maintemplate.php file under /views. From there, you can start creating controllers and models appropriately, making sure to extend from the base classes for each (see the existing home and error controllers and models for examples). Then you'll want to match your controller structure in the views directory, and create a view file for each of your controller's actions/methods (again, home and error can be used as an example).</p>
<p>With this all done, any controller, action and view setup you create should be viewable via /controller/action.</p>
<p>If you want to extend the capability of your models, such as including the ability for them to interact with a database, your best bet would be to establish your extensions in the BaseModel class's construct method. Since any model should extend from this class, they would therefore inherit any functionality you add. Other than a database connection, other examples include functionality for generating, validating, and sanitizing.</p>
</div>