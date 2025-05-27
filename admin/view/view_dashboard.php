<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">NDCM ICT CLUB Dashboard</h6>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 bg-white mb-5 rounded-5 p-2">
                <?php include_once('allpost.php')?>
              </div>
            </div>
            <div class="row">
              
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Transaction History</div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                     <?php include_once('payment.php');?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>