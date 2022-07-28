class Myheader extends HTMLElement{
      connectedCallback(){

      this.innerHTML = `

<nav class="navbar" id="nav">
  <a href="#" class="active">About</a>

<div class="dropdown">
      <button class="btn">Admission
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-menu">
      <a href="Admission.html">Admission</a>
      <a href="Finance.html">Finance</a>
      <a href="Testing.html">Testing Center</a>
      <a href="Program.html">University Academic Program</a>
      <a href="Registrar.html">University Registrar</a>
      <a href="Contact.html">Contact</a>
      </div>
  </div> 

<div class="dropdown">
      <button class="btn">Academics
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-menu">
      <a href="Admission.html">Admission</a>
      <a href="Finance.html">Finance</a>
      <a href="Testing.html">Testing Center</a>
      <a href="Program.html">University Academic Program</a>
      <a href="Registrar.html">University Registrar</a>
      <a href="Contact.html">Contact</a>
      </div>
  </div> 
<a href="#">Research</a>
  <a href="#">SocDev</a>
<a href="#">Research</a>
  <a href="#">SocDev</a>
  <a href="#">Research</a>
      <a href="#">SocDev</a>
        <a href="#">Research</a>
  <a href="#">SocDev</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</nav>
`

      }
}
      customElements.define('my-header',MyHeader)