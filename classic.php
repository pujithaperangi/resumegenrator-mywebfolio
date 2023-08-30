<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <style>
    fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 20px 0;
  }

  legend {
    font-weight: bold;

  }
        
  body{
            background-image: url('Screenshot from 2023-08-17 07-52-03.png');
            background-size: cover;
        }
    </style>
</head>
<body>
    
        <h2>Enter your Details</h2>
    <form   method="POST"   action="srt-resume.php" >
    <div class="container">
        <p class="h4"> <i class="bi bi-file-earmark-person-fill"></i> Profile</p>
    <div class="row justify-content-between">
  <div class=" col-6 mb-3 mt-4">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="ur name" >
    </div>
  </div>
  <div class=" col-6 mb-3 mt-4">
    <label for="headline" class="col-sm-2 col-form-label" >Headline</label>
    <div class="col-sm-10">
      <input type="text" class="form-control my-2" id="headline" name="headline"placeholder="vocation" required>
    </div>
  </div>
  <div class=" mb-3">
    <label for="objective" class="col-sm-2 col-form-label" >Objective</label>
    <div class="col-sm-10">
     
      <textarea class="w-100" name="objective" id="objective" required></textarea>
    </div>
  </div>
</div>
  <hr>
    <div class="row justify-content-between">
        <p class="h4"><i class="bi bi-telephone-fill"></i> Contact Details</p>
  <div class=" col-6 mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3" name="email"placeholder="" id="email" required>
    </div>
  </div>
  
  <div class=" col-6 mb-3">
    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="mobile" name="contact"placeholder="" required>
    </div>
  </div>
</div>
  <div class="mb-3">
    <label for="Address" class="col-sm-2 col-form-label"  ><i class="bi bi-geo-alt-fill"></i>Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Address" name="address"placeholder="address" required>
    </div>
  </div>

  <hr>
  <div class="mb-3">
    <label for="" class="col-sm-2 col-form-label" class="h3"><p class="h4"><i class="bi bi-tools"></i>Skills</p></label>
    <div  id="skills">
    <span class="badge text-bg-dark">HTML</span>
    </div>
    <div class="col-sm-10">
        
    <div class="input-group mb-3">
  <input type="text" class="form-control"id="userskill" placeholder="data science" aria-label="Recipient's username" aria-describedby="button-addon2" >
  <button class="btn btn-outline-primary" type="button"  id="addskill">Add Skill</button>
</div>

  </div>
  <hr>
  <div class="mb-3">
    <label for="" class="col-sm-2 col-form-label h3" ><p class="h4"><i class="bi bi-book-fill"></i>Education</p></label>
    <div class="d-flex gap-2">
      <input type="text" class="form-control"  name="institute"placeholder="institute">
      <input type="text" class="form-control"  name="education"placeholder="graduation">
      <input type="text" class="form-control"  name="timeperiod"placeholder="time period">
      <button class="btn btn-warning">Add</button>
    </div>
  </div>
  <hr>
  <div class="mb-3">
    <label for="" class="col-sm-2 col-form-label"><p class="h4"><i class="bi bi-briefcase-fill"></i>Experience</p></label>
    <div class="d-flex gap-2">
      <input type="text" class="form-control"  name="company"placeholder="company">
      <input type="text" class="form-control"  name="experience"placeholder="role">
      <input type="text" class="form-control"  name="time"placeholder="timeperiod">
      <button class="btn btn-warning">Add</button>
      </div>
      <textarea name="experience" class="w-100 mt-2" placeholder="job description" name="jobdesc"></textarea>
    
  </div>
  

  <button type="submit" class="btn btn-success"><i class="bi bi-card-list"></i>create resume</button>
</form>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
<script>
   document.getElementById("addskill").addEventListener("click", function() {
    var skillInput = document.getElementById("userskill");
    var skill = skillInput.value;
    
    if (!skill) {
        // Replace this with your desired toast logic
        alert("Enter a skill");
        return;
    }
    
    var skillsContainer = document.getElementById("skills");
    var skillBadge = document.createElement("span");
    skillBadge.className = "badge bg-dark p-1 m-1";
    skillBadge.textContent = skill;
    
    var hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "skill[]";
    hiddenInput.value = skill;
    
    skillBadge.appendChild(hiddenInput);
    skillsContainer.appendChild(skillBadge);
});




</script>
</body>
</html>