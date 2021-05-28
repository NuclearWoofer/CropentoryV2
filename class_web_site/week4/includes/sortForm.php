<?php include __DIR__ . '/../include/header.php'; ?>

<form  method="post">
    <input type="hidden" name="action" value="sort">
       <label>Sort By Field:&nbsp;&nbsp;&nbsp;</label>
       <select name="fieldName">
              <option value="">Select One</option>
              <option value="patientFirstName">Patient's First Name</option>
              <option value="patientLastName">Patient's Last Name</option>
              
          </select>
       <input type="radio" name="fieldValue" value="ASC" checked />Ascending
       <input type="radio" name="fieldValue" value="DESC" />Descending
       
      <button type="submit"  name="sortPatients">Sort</button>
   
      
  </form>

<?php include __DIR__ . '/../include/footer.php'; ?>