<?php include 'init.php';?>

  <div class="accounts">
     <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Choose from Your Accounts
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">12345</a></li>
        <li><a class="dropdown-item" href="#">56777</a></li>
        <li><a class="dropdown-item" href="#">32673y46</a></li>
      </ul>
    </div>

  </div>





  <div class="container">
    <div class="row">
      <div class="col-md-10">
        
        <h4>Credit Card</h4>

        <table class="table table-bordered">

          <thead>
            <tr>
              <th>Transaction date</th>
              <th>Value date</th>
              <th>balance</th>
              <th>Avaliable to use</th>
              <th>Equivalent</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>19/12/2020</td>
              <td>19/12/2020</td>
              <td>222.22</td>
              <td>13.4</td>
              <td>111</td>
            </tr>   
          </tbody>  
          <tbody>
            <tr>
              <td>19/12/2020</td>
              <td>19/12/2020</td>
              <td>222.22</td>
              <td>13.4</td>
              <td>111</td>
            </tr>   
          </tbody>  
        </table>

     <!-- <button type="button" class="btn btn-secondary view-more" formaction="/account_details.php">View More
      </button>-->

      <br>
        <h4>Debit Card</h4>

        <table class="table table-bordered">

          <thead>
            <tr>
              <th>Transaction date</th>
              <th>Value date</th>
              <th>balance</th>
              <th>Avaliable to use</th>
              <th>Equivalent</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>19/12/2020</td>
              <td>19/12/2020</td>
              <td>222.22</td>
              <td>13.4</td>
              <td>111</td>
            </tr>   
          </tbody>  
        </table>

        <button type="button" class="btn btn-secondary view-more" formaction="account_details.php">
          View More
        </button>

      </div>


      <!---------------------------------------------------------->
      <div class="col-md-2 ">

        <h6>Help and Support</h6> 
        <ul class="support">
          <li>Transfer to your account</li>
          <li>Pay Your Credit Card</li>
          <li>Payment to Others</li>
          <li>Change Your Language</li>
        </ul>
        
        <h6>Foreign Exchange Rates</h6> 
          <table class="table table-striped foregin">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Buy</th>
              <th>Sell</th>

            </tr>
          </thead>

          <tbody>
            <!--USD-->
            <tr>
              <td><img src="layout/images/us.png" style="width:25px; height:25px;"></td>
              <td>USD</td>
              <td>15.68</td>
              <td>15.7</td>
            </tr>   
            <!--EURO-->

            <tr>
              <td><img src="layout/images/nu.png" style="width:25px; height:25px;"></td>
              <td>EURO</td>
              <td>15.68</td>
              <td>15.7</td>
            </tr>

            <!--GDP-->


            <tr>
              <td><img src="layout/images/uk.png" style="width:25px; height:25px;"></td>
              <td>GDP</td>
              <td>15.68</td>
              <td>15.7</td>
            </tr> 
          </tbody>  
        </table>

      </div>

    </div>
  </div>








<?php include $inc .'footer.php';?>
