
<table class="table table-striped" style="width:50%">

    <thead>
        <tr>
            <th>Patient's First Name</th>
            <th>Patient's Last Name</th>
            <th>Married?</th>
            <th>Birth Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($patients as $row): ?>
            <tr>
                <td><?php echo $row['patientFirstName']; ?></td> 
                <td><?php echo $row['patientLastName']; ?></td> 
                <td><?php echo $row['patientMarried'] ? 'Yes' : 'No'; ?></td> 
                <td><?php echo $row['patientBirthDate']; ?></td> 
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>


