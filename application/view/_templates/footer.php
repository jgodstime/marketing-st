 
  <div class="panel panel-default" style="margin-top:40px;">
    <div class="panel-footer" style="">
 
      <p style="color:black;"> Web-based marketing information record system <br>(A case study of Guiness PLC. Ikot Ekpene.)</p>
    <p style="color:black;">Supervised By: DR. MRS. MFREKE UMOH</p>
      <span style="color: black;"><strong> Udofia, Nsisong Samuel
      AKP/ASC/CSC/HND2017/0876 &copy;	<?php echo (new DateTime)->format("Y");?>.</strong> </span>
      
      
      <style>
      li.footerFormat {
        display: inline;
        padding-right:10px;
    
      }
      </style>
    
    </div>
  </div>
  <script type="text/javascript" src="<?php echo URL; ?>repertory/bt_files/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>repertory/bt_files/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>repertory/bt_files/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>repertory/bt_files/vue/vue.js"></script>
<!-- <script type="text/javascript" src="<?php echo URL; ?>repertory/bt_files/vue/vuex.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
<!-- <script src="https://unpkg.com/vuex"></script> -->

<script type="text/javascript">
    new Vue({
  el: '#vapp',
  data() {
   
    return {
      qty: false,
      qtyUsed: 0,
      unitPrice: 0,
      costOfItemMarketed:0,
      quantityMarketed: 0,
      incomeFromMarketing: 0,
      costOfLosses:0,
      totalIncome: 0
    }
  },
  computed:{
    calcTotal: function(){
      this.costOfItemMarketed = this.qtyUsed * this.unitPrice
      this.incomeFromMarketing = this.quantityMarketed * this.unitPrice
      this.totalIncome =  this.incomeFromMarketing - this.costOfLosses
    }
  }
})
</script>
<!-- $costOfItemMarketed = $qtyUsed * $unitPrice;
                $incomeFromMarketing = $quantityMarketed * $unitPrice;
                $totalIncome = $incomeFromMarketing - $costOfLosses; -->

<script type="text/javascript">
    $(document).ready(function() {
        $(".table").DataTable({
            // "ordering": true,
            // "searching": true,
            // "paging": true,
            // "columnDefs": [
            //     {
            //         "targets": 0,
            //         "searchable": false,
            //         "visible": true
            //     }
            // ],
            // "order": [[2, "asc"]]
        });
    });

  
</script>
  </body>
  </html>

