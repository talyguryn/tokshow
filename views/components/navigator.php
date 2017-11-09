<label for="show-menu" class="show-menu">Show Menu</label>
<input type="checkbox" id="show-menu" role="button">
<ul id="menu">
    <li><a href="#">Home</a></li>
    <li>
        <a href="#">About ï¿¬</a>
        <ul class="hidden">
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">What We Do</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Portfolio ï¿¬</a>
        <ul class="hidden">
            <li><a href="#">Photography</a></li>
            <li><a href="#">Web & User Interface Design</a></li>
            <li><a href="#">Illustration</a></li>
        </ul>
    </li>
    <li><a href="#">News</a></li>
    <li><a href="#">Contact</a></li>
</ul>

<div class='burger' onclick="this.classList.toggle('open')">
  <span></span>
  <span></span>
  <span></span>
</div>
