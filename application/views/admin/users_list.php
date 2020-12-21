

<div class="container" style="padding:40px;">

  <div class="panel panel-default">

    <div class="panel-body">
		<table class="table table-bordered">
			<thead>
			  <tr>
				<th>SL.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Zip</th>
				<th>No Guest</th>
				<th>Season Ticket</th>
				<th>Women Club</th>
				<th>Offers</th>
				<th>S.M.A Club</th>
			  </tr>
			</thead>
			<tbody>
			  <?php
				$i=1;
			  foreach($user_detail as $row) { ?>
				  <tr>
				    <td><?php echo $i; ?></td>
					<td><?php echo $row->fname. " ". $row->lname;?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->zip == 0 ?'N/A': $row->zip;?></td>
					<td><?php echo $row->no_of_guests;?></td>
					<td><?php echo $row->season_tkt == 0 ? "<i class='fa fa-window-close-o'></i>": "<i class='fa fa-check-circle'></i>";?></td>
					<td><?php echo $row->women_club == 0 ? "<i class='fa fa-window-close-o'></i>": "<i class='fa fa-check-circle'></i>";?></td>
					<td><?php echo $row->offers == 0 ? "<i class='fa fa-window-close-o'></i>" : "<i class='fa fa-check-circle'></i>";?></td>
					<td><?php echo $row->saluteMilitaryAppreciationClub == 0 ? "<i class='fa fa-window-close-o'></i>" : "<i class='fa fa-check-circle'></i>";?></td>
				  </tr>
				  <?php $i++; ?>
			  <?php } ?>
			</tbody>
		</table>
	</div>
    <div class="panel-footer"><p><?php echo $links; ?></p></div>
  </div>
</div>
 