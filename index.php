<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>

<head>
    <title>
        CRUD da
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <table>
        <tr>
            <td>
				<form id="frm"; onsubmit="event.preventDefault();" autocomplete="off" style="width: 200px;">
                <div>
                        <input type="hidden" name="id" id="id" value="">
                    </div>
                    <div>
                        <label>Full Name*</label><label class="validation-error hide" id="fullNameValidationError"> </label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>EMP Code</label>
                        <input type="text" name="empCode" id="empCode">
                    </div>
                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div class="form-action-buttons" style="width: 300px; height: 45px;">
                        <input type="submit" value="Submit" id="submit">
                    </div>
                </form>
            </td>
            <td>
                <table class="list" id="employeeList">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Full Name</th>
                            <th>EMP Code</th>
                            <th>Salary</th>
                            <th>City</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="dy_data">

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>

<script>
	$(document).ready(function(){
		$("#submit").click(function(){
            if($("#id").val()){
                $.ajax({
				url:"update.php",
				type:"post",
				data:$("#frm").serialize(),
				success:function(d)
				{
					// alert(d);
					$("#frm")[0].reset();
				}
				});
            }else{
			$.ajax({
				url:"insert.php",
				type:"post",
				data:$("#frm").serialize(),
				success:function(d)
				{
					// alert(d);
                    $("#id").val(d);
                    onFormSubmit();
					$("#frm")[0].reset();
				}
				});
            }
		});
	});
	
	$(document).ready(function(){
		getResult();
	});
	
	function ondeleterecord(id){
		$.ajax({
			url: "delete.php",
			type: "post",
			data:{id:id},
			success: function(data){
				alert(data);
                getResult();
			}
		});
	}
	
</script>
</html>