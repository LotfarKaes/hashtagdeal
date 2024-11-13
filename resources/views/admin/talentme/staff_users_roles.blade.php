@extends('admin.admin_dashboard')
@section('admin')

<div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h5 class="mb-0">Role</h5>
                </div>
				
				<div style="margin-left: 100px;"class="dt-buttons">          <button class="dt-button buttons-print btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Print</span></button> <button class="dt-button buttons-excel buttons-html5 btn btn-success btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5 btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>PDF</span></button> <button class="dt-button buttons-csv buttons-html5 btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>CSV</span></button> <button class="dt-button buttons-copy buttons-html5 btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Copy</span></button> </div>
                
				<div class="font-22 ms-auto">
                  <i class="bx bx-dots-horizontal-rounded"></i>
                </div>
              </div>
              <hr />
              <div class="table-responsive">
                <table class="table align-middle mb-0">
                  <thead class="table-light">
                    <tr>
                      <th>Role</th>
                      <th>Assinged Users</th>
                      <th>Assinged permissions</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Lotfar kaes</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-2">
                            <h6 class="mb-1 font-14">lotfar.kaes@gmail.com</h6>
                          </div>
                        </div>
                      </td>
                      <td>01723447834</td>
             
                        <td>
                            <a  title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
                            <a  id="delete" title="Delete Data"><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
                            <a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
                        </td>
          
                    </tr>
                    <tr>
						<td>Lotfar kaes</td>
						<td>
						  <div class="d-flex align-items-center">
							<div class="ms-2">
							  <h6 class="mb-1 font-14">lotfar.kaes@gmail.com</h6>
							</div>
						  </div>
						</td>
						<td>01723447834</td>
                        <td>
                            <a  title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
                            <a  id="delete" title="Delete Data"><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
                            <a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
                        </td>
          
					  </tr>
					  <tr>
						<td>Lotfar kaes</td>
						<td>
						  <div class="d-flex align-items-center">
							<div class="ms-2">
							  <h6 class="mb-1 font-14">aasd.das@gmail.com</h6>
							</div>
						  </div>
						</td>
						<td>2323213123</td>
                        <td>
                            <a  title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
                            <a  id="delete" title="Delete Data"><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
                            <a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
                        </td>
          
					  </tr>
					  <tr>
						<td>AB kaes</td>
						<td>
						  <div class="d-flex align-items-center">
							<div class="ms-2">
							  <h6 class="mb-1 font-14">yy.yyy@gmail.com</h6>
							</div>
						  </div>
						</td>
						<td>01723447834</td>
                        <td>
                            <a  title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
                            <a  id="delete" title="Delete Data"><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
                            <a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
                        </td>
          
					  </tr>
					  <tr>
						<td>Lotfar kaes</td>
						<td>
						  <div class="d-flex align-items-center">
							<div class="ms-2">
							  <h6 class="mb-1 font-14">lotggfar.gg@gmail.com</h6>
							</div>
						  </div>
						</td>
						<td>56677895</td>
                        <td>
                            <a  title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
                            <a  id="delete" title="Delete Data"><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
                            <a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
                        </td>
          
					  </tr>
					  <tr>
						<td>Lotfarko</td>
						<td>
						  <div class="d-flex align-items-center">
							<div class="ms-2">
							  <h6 class="mb-1 font-14">lodsatfar.kaes@gmail.com</h6>
							</div>
						  </div>
						</td>
						<td>013213213312</td>
                        <td>
                            <a  title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
                            <a  id="delete" title="Delete Data"><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
                            <a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
                        </td>
          
					  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection