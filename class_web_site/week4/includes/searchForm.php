
  <h2>Search Team</h2>
  <form method="post">
      <input type="hidden" name="action" value="search" />
      <label>Search by Field:</label>
       <select name="fieldName">
              <option value="">Select One</option>
              <option value="patientFirstName">Patient's First Name</option>
              <option value="patientBirthDate">Patient's Birth Date</option>
              
          </select>
       <input type="text" name="fieldValue" value= "<?= $fieldValue ?>">
      <button type="submit" name="searchPatients">Search</button>
      
  </form>
    
