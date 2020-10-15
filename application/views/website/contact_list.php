<?php if ($theme_mode == "DARK") { ?>
  <style>
    .div_main {
      font-size: small;
      /* background-color: grey; */
    }

    tbody {
      color: whitesmoke;
    }

    tbody tr:hover {
      color: whitesmoke !important;
    }
  </style>
<?php } else { ?>
  <style type="text/css">
    .div_main {
      font-size: small;
      /* background-color: grey; */
    }
  </style>
<?php } ?>





<div class="div_main pt-5" id="div_main">
  <p class="font-weight-bold mt-5 pt-5">&emsp;&nbsp;All Airdrop articipants List - Page : <?php echo $userReq ?></p>
  <div class="table-responsive container col-12 m-0 div_cont mt-3" id="div_cont">

    <table class="table table-sm table-striped table-bordered table-hover text-nowrap">
      <thead>
        <tr class="table-info">
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Status</th>
          <th scope="col">Created</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>


        <?php foreach ($entries as $key => $entry) { ?>
          <tr>
            <td><?php echo $entry->id ?></td>
            <td><?php echo $entry->name ?></td>
            <td><?php echo $entry->email ?></td>
            <td><?php echo $entry->subject ?></td>
            <td><?php echo $entry->status ?></td>
            <td><?php echo $entry->created ?></td>

            <td><a class="btn btn-sm submit_btn py-0 px-1"  style="font-size: smaller;" href="<?php echo base_url("home/nvjhbxn/") . $entry->id . "/" . $userReq ?>">View</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <hr>

  </div>

  <nav aria-label="...">
    <ul class="pagination pagination-sm justify-content-center">

      <li class="page-item <?php echo ($userReq <= 1) ? "disabled" : "" ?>">
        <a class="page-link" href="<?php echo base_url("home/jjjsssuuueee/") . ((int)$userReq - 1) ?>">
          <span aria-hidden="true">&laquo; Prev</span>
          <!-- <span class="sr-only">Previous</span> -->
        </a>
      </li>

      <li class="page-item <?php echo ($userReq >= $pageNum) ? "disabled" : "" ?>">
        <a class="page-link" href="<?php echo base_url("home/jjjsssuuueee/") . ((int)$userReq + 1) ?>">
          <span aria-hidden="true">Next &raquo;</span>
          <!-- <span class="sr-only">Next</span> -->
        </a>
      </li>

    </ul>
  </nav>


</div>