<html>


<form action="/deputy/public/post" method="post">

	{{csrf_field()}}
<input type="text" name="timesheet">
<input type="text" name="mealbreak">
<button type="submit"></button>
</form>

<div>
<form action="/deputy/public/start" method="post">

	{{csrf_field()}}
<input type="text" name="empId">
<input type="text" name="unitId">
<button type="submit"></button>
</div>
</form>
</html>