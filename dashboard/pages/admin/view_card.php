<!-- start page content -->
<?php

if(empty($_GET['customer_serial_number'])){
    echo 'jdjdj';

}else{
    ?>
    <?php
}


?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Transactions</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=transactions">Transactions</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Transactions Lists</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>User Transaction</header>
                                        </div>
                                        <div class="card-body ">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                       id="exportTable">
                                                    <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Customer ID </th>
                                                        <th> Plan </th>
                                                        <th> amount </th>
                                                        <th> Settle </th>
                                                        <th> Time</th>
                                                        <th> Date </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $no = 1;
                                                    $run = $this->run("SELECT * FROM `transactions` WHERE `tran_customer_id`='".$_GET['customer_serial_number']."'");
                                                    while ($row = $this->fetch($run)){
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td> <?php  echo $no++; ?></td>
                                                            <td> <?php echo $row['tran_customer_id'] ?></td>
                                                            <td> <?php echo $row['kg']  ?></td>
                                                            <td> <?php echo $this->format_money($row['price'],true) ?></td>
                                                            <td> <?php  echo $this->format_money($row['total_amount'],true) ?></td>
                                                            <td> <?php  echo $this->time_ago($row['time']); ?></td>
                                                            <td> <?php echo $row['date'];  ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
