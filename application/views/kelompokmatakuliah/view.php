<h2 style="font-weight: normal;"><?php echo $title;?></h2>
<div class="push">
    <ol class="breadcrumb">
        <li><i class='fa fa-home'></i> <a href="javascript:void(0)">Home</a></li>
        <li><?php echo anchor($this->uri->segment(1),$title);?></li>
        <li class="active">Data</li>
    </ol>
</div>

 <?php
echo anchor($this->uri->segment(1).'/post',"<i class='fa fa-pencil-square-o'></i> Tambah Data",array('class'=>'btn btn-danger   btn-sm','title'=>'Tambah Data'))
?>

                    <table id="example-datatables" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>

                                <th width="7">No</th>
                                <th width="70">Kode </th>
                                <th>Nama Kelompok Matakuliah</th>
                                <th width="90"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i=1;
                            foreach ($record as $r)
                            {
                            ?>

                            <tr>

                                <td><?php echo $i;?></td>
                                <td><?php echo strtoupper($r->kode_kelompok);?></td>
                                <td><?php echo strtoupper($r->nama);?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="<?php echo base_url().''.$this->uri->segment(1).'/edit/'.$r->kelompok_id;?>" data-toggle="tooltip" title="Edit" ><i class="gi gi-edit"></i></a>
                                        <a href="<?php echo base_url().''.$this->uri->segment(1).'/delete/'.$r->kelompok_id;?>" data-toggle="tooltip" title="Delete" ><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++;}?>


                        </tbody>
                    </table>
                    <!-- END Datatables -->
