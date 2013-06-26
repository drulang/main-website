
<?php
include 'layout.php';
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php echo get_head(); ?>

    <body>

        <?php echo get_top_navbar(); ?>

        <div class="container">
            <?php 
                echo getNav(); 
                echo getFrm();
            ?>
        
        </div> <!-- /container -->

        <?php echo get_js(); ?>

    </body>
</html>


<?php


function getNav()
{
    $frm =  '<ul class="nav nav-tabs">';
    if(!isset($_GET['tbl']))
    {
        $frm .='<li class="active"><a href="/freelance.php">General</a></li>';
    }
    else{ $frm .='<li><a href="/freelance.php">General</a></li>'; }
    
    
    if($_GET['tbl'] == 'programming') 
    {
        $frm .='<li class="active"><a href="?tbl=programming">Programming</a></li>';
    }
    else { $frm .='<li><a href="?tbl=programming">Programming</a></li>'; }
    
    if($_GET['tbl'] == 'db')
    {
        $frm .='<li class="active"><a href="?tbl=db">Database</a></li>';
    }
    else { $frm .='<li><a href="?tbl=db">Database</a></li>'; }
    
    if($_GET['tbl'] == "automation")
    {
        $frm.='<li class="active"><a href="?tbl=automation">Automation</a></li>';
    }
    else { $frm.='<li><a href="?tbl=automation">Automation</a></li>'; }
    
    if($_GET['tbl'] == "quote")
    {
        $frm .= '<li class="active"><a href="?tbl=quote">Request Quote</a></li>';
    }
    else { $frm .= '<li><a href="?tbl=quote">Request Quote</a></li>';}
    
    $frm .= '</ul>';
    return $frm;
}

function getFrm()
{
    
    if($_GET['tbl'] == 'programming')
    {
        $paragrah = '<p>Solutions are well thought out before programming even begins.  All code is documented and diagramed when appropritae. I specialize in backend programming.<br/><br/>
            Languages: Python, C#, Java, Perl, PHP, SQL</p>';
        
        $paragrah .= '<ul>';
        $paragrah .= '  <li>File parsing, manipulation, and creation</li>';
        $paragrah .= '  <li>Automation: website navigation, handling file extracts, ssh, GUI, etc. </li>';
        $paragrah .= '  <li>Batch and Transaction Processing</li>';
        $paragrah .= '  <li>Simple and functional GUIs</li>';
        $paragrah .= '  <li>Custom libraries</li>';
        $paragrah .= '  <li>Batch jobs</li>';
        $paragrah .= '  <li>REST Webservices</li>';
        $paragrah .= '  <li>SQL, including stored procedures';
        $paragrah .= '  <li>Among other solutions.</li>';
        $paragrah .= '</ul>';
        
        $frm = '<div class="row">
                <div class="span10 offset1">
                    <h4>Programming</h4>';
        
        $frm .= $paragrah;            
        
        $frm .='     <table class="table table-striped table-condensed">
                        <th>Service</th>
                        <th>Description</th>
                        <th>Price /hr</th>
                        <tr>
                            <td>Custom Code</td>
                            <td>Write custom code</td>
                            <td>$55</td>
                        </tr>
                        <tr>
                            <td>Code Maintenance</td>
                            <td>Update existing code</td>
                            <td>$45</td>
                        </tr>
                        <tr>
                            <td>Code Review</td>
                            <td>Review code for needed updates, bugs, security issues</td>
                            <td>$30</td>
                        </tr>
                        <tr>
                            <td>After Hours</td>
                            <td>Coding needed in the twilight</td>
                            <td>$100</td>
                        </tr>
                    </table>
                </div>

                <br/>
            </div>
            <hr class="featurette-divider">';
        return $frm;
    }
    elseif($_GET['tbl'] == 'db')
    {
        $paragrah = '<p>Four years in desigining and working with relational databases.</p>';
        $paragrah .= 'RDBMS Experience:<ul>';
        $paragrah .= '  <li>MySQL</li>';
        $paragrah .= '  <li>Oracle</li>';
        $paragrah .= '  <li>SQL Server</li>';
        $paragrah .= '</ul>';
        $paragrah .= 'NoSQL Experience<ul>';
        $paragrah .= '  <li>Redis</li>';
        $paragrah .= '  <li>MongoDB</li>';
        $paragrah .= '</ul>';
        $paragrah .= '<hr class="featurette-divider">';
        
        $frm = '<div class="row">
                <div class="span10 offset1">
                    <h4>Database Design</h4>';
        $frm .= $paragrah;
        $frm .= '   <table class="table table-striped table-condensed">
                        <th>Service</th>
                        <th>Description</th>
                        <th>Price /hr</th>
                        <tr>
                            <td>New Relational Database Model</td>
                            <td>Design ERD from ground up</td>
                            <td>$65</td>
                        </tr>
                        <tr>
                            <td>Existing Relational Database</td>
                            <td>Update existing ERD</td>
                            <td>$55</td>
                        </tr>
                        <tr>
                            <td>SQL Queries</td>
                            <td>Write custom SQL queries</td>
                            <td>$40</td>
                        <tr>
                            <td>NoSQL</td>
                            <td>Data strcture design/queries</td>
                            <td>Request Quote</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr class="featurette-divider">';
        return $frm;
    }
    elseif($_GET['tbl'] == "automation")
    {
        $frm = '<div class="row">
                <div class="span10 offset1">
                    <h4>Automation</h4>
                    <table class="table table-striped table-condensed">
                        <th>Service</th>
                        <th>Description</th>
                        <th>Price</th>
                        <tr>
                            <td>Process</td>
                            <td>Design/write new process</td>
                            <td>Request Quote</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr class="featurette-divider">';
        return $frm;
    }
    elseif($_GET['tbl'] == "quote")
    {
        $frm = '<form method="POST">
                <fieldset>
                    <legend>Request a Quote/Meeting</legend>';
        
        if(isset($_POST['submit']))
        {
            if(insert_req($_POST['fname'], $_POST['co'], $_POST['email'], $_POST['phone'], $_POST['reqtyp'], $_POST['desc'])) {
                $frm .= '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Submitted!</strong> I will contact you as I can.
                         </div>';
            }
            else {
                $frm .= '<div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Failed</strong> Please do not hesitate to contact me at drulang@gmail.com
                         </div>';
            }
        }
        
        $frm .='   <div class="controls">
                        <input name="fname" type="text" placeholder="First Name">
                    </div>
                    <div class="controls">
                        <input name="co" type="text" placeholder="Company Name">
                    </div>
                    <div class="controls">
                        <input name="email" type="text" placeholder="Email">
                    </div>
                    <div class="controls">
                        <input name="phone" type="text" placeholder="Phone Number">
                    </div>
                    <div class="controls">
                        <select name="reqtyp">
                            <option>General</option>
                            <option>Programming</option>
                            <option>Database</option>
                            <option>Automation</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="controls">
                    <textarea name="desc" rows="3" placeholder="Brief description of problem..."></textarea>
                    </div>
                 
                    <button name="submit" type="submit" class="btn">Submit</button>
                </fieldset>
                </form>';
        return $frm;
    }
    else
    {
        $frm = '
        <div class="row">
           <div class="span10 offset1">
               <h3>Freelance Programming and Database Desigin</h3>
               <ul>
                   <li>All rates are in 1hr increments(ex. 30min of work would be charged for a full hour)</li>
                   <li>All projects require a minimum of 1 hour billing</li>
                   <li>Initial requirements gathering and requesting a quote is at no charge</li>
                   <li>Prices do not include maintenance and upgrades. Once project is complete it become your responsibility.</li>
                   <li>No work for/on school projects will be done</li>
                   <li>If I have to learn a new technology/library this generally does not count towards billing</li>
                   <li>All code is warranty free</li>
                   <li>I can be booked in full (Ex. for a full week/month)<a href="?tbl=quote">Request a quote</a></li>
                   <li>I do have referals. Please <a href="?tbl=quote">request a quote</a> for more information</li>
              </ul>';
        
        $frm .= '<h5>Payment Options</h5>
                 <ul>
                    <li>Certified Bank Check</li>
                    <li>Cash</li>
                    <li>Paypal</li>
                 </ul>';
        
        $frm .= '</div>
        </div>';
        
        return $frm;
    }
}

?>