<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản lý đơn hàng</li>
			</ol>
			<?php $this->load->view('admin/message', $this->data); ?>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý đơn hàng</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-default">
							<div class="panel-body">
								<table 
									data-toolbar="#toolbar"
									data-toggle="table">	
									<thead>
										<tr>
						    				<th data-field="id" data-sortable="true">OrderID</th>
                                			<th>Name</th>
                                			<th>Email</th>
                                			<th>Phone</th>
                                			<th>Địa chỉ</th>
                                			<th>Mặt hàng : số lượng</th>
                                			<th>Tổng tiền</th>
                                			<th>Ngày lập</th>
                                			<th>Xử lí</th>
						    			</tr>
									</thead>
									<tbody>
                               			<?php foreach ($list as $row):?>
										<tr>
											<td style=""><?php echo $row->order_id; ?></td>
											<td style=""><?php echo $row->customer_name; ?></td>
											<td style=""><?php echo $row->customer_email; ?></td>
											<td style=""><?php echo $row->customer_phone; ?></td>
											<td style=""><?php echo $row->customer_address; ?></td>
											<td>
                                                    <?php foreach ($detail as $rowd):?>
                                                    	<?php if ($rowd->order_id == $row->order_id):?>
                                                    		<?php foreach ($product as $rowp): ?> 
                                                    			<?php if($rowd->product_id == $rowp->product_id): ?>
                                                    				<?php echo $rowp->name.' : '.$rowd->qty; ?>
                                                    				<br>
                                                    				<?php $total = $total + ($rowp->price - $rowp->discount)*$rowd->qty; ?>
                                                    			<?php endif; ?>
                                                    		<?php endforeach; ?>
                                                    	<?php endif; ?>
                                                    <?php endforeach; ?>
                                            	
                                        	</td>

                                        	<td><b style="color: red">$<?php echo $total; ?></b></td>
                                        	<td style=""><?php echo $row->created; ?></td>
											<td class="form-group">
												<a href="<?php echo "http://localhost/projectdatabase/index.php/admin/Order/delete/".$row->order_id;?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
                                	</tbody>
								</table>
							</div>
							<div class="panel-footer">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
									</ul>
								</nav>
							</div>
						</div>
			</div>
		</div><!--/.row-->