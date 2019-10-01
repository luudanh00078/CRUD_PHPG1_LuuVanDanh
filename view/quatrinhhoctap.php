<?php
include_once("header.php");
?>
<?php
include_once("nav.php");
include_once("../model/entity/learninghistory.php");
$rsMockData = LearningHistory::getList("102T1011010");
$rsFromFile = LearningHistory::getListFromFile("101");
//var_dump($rsMockData );
//var_dump($rsFromFile);
//var_dump($rs);
?>
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<div class="btn-add d-flex justify-content-end align-items-center pb-3">
				<a  class="btn btn-outline-primary" href="student-add.php"><i class="fas fa-plus-circle"></i>Thêm</a>
			    </button>
			</div>
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Từ năm</th>
					<th scope="col">Đến năm</th>
					<th scope="col">Lớp</th>
					<th scope="col">Nơi học</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
				   foreach($rsFromFile as $key => $value){
					   //$stt = $key + 1;
					   echo "<tr>";
					   echo "<th scope='row'>$value->id</th>";
					   echo "<td>$value->yearFrom</td>";
					   echo "<td>$value->yearTo</td>";
					   echo "<td>$value->schoolName</td>";
					   echo "<td>$value->schoolAddress</td>";
					   echo "<td class='d-flex'>";
					   echo "<a class='btn btn-outline-success mr-3' href='student-edit.php?id=$value->id'><i class='far fa-edit'></i> Sửa</a>";
					   echo "<a class='btn btn-outline-danger' href='student-delete.php?id=$value->id'><i class='fas fa-trash-alt'></i> Xóa</a>";
					   echo "</td>";
					   echo "</tr>";
				   }
								
										
				?>


			</tbody>
		</table>
	</div>
</div>
             

<?php
include_once("footer.php");
?>