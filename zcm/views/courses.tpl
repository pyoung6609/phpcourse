{extends file='base.tpl'}
{block name=title}Courses{/block}
{block name=body}
<table>
<thead>
	<tr>
		<td>Course Name</td>
		<td>Course Category</td>
	</tr>
</thead>
<tbody>
	{foreach $course as $courses}
	<tr>
		<td>{$course.title}</td>
		<td>{$course.category_id}</td>
	</tr>
	{/foreach}	
</tbody>
</table>
{/block}