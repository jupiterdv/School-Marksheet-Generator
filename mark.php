


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berean English Medium School Marksheet</title>
  <style type="text/css">
    <!--
    .style1 {
      color: #FFFFFF;
      font-size: 20px;
      font-weight: bold;
    }

    .style3 {
      font-size: 14px;
      color: #2fb3fa;
    }

    .style4 {
      color: #2fb3fa;
      font-weight: bold;
    }



    body {
      -webkit-user-select: none;
      /* Chrome, Opera, Safari */
      -moz-user-select: none;
      /* Firefox 2+ */
      -ms-user-select: none;
      /* IE 10+ */
      user-select: none;
      /* Standard syntax */
    }
    -->
  </style>
  <script type="text/javascript">
    function check() {
      var n = /^[a-zA-Z]+$/;

      //1.College Name Dropdown Validations
      if (document.frm.college.selectedIndex == 0) {
        document.getElementById('cerror').innerHTML = "**Please Select the School";
        document.frm.college.focus();
        return false;
      } else {
        document.getElementById('cerror').innerHTML = "";
      }


      /*-------------------------------------------------------------------------------------------------------------*/

      //2.Roll No. Dropdown Validations
      if (document.frm.roll_no.selectedIndex == 0) {
        document.getElementById('rnerror').innerHTML = "**Please Select Roll Number of Student";
        document.frm.roll_no.focus();
        return false;
      } else {
        document.getElementById('rnerror').innerHTML = "";
      }

      /*-------------------------------------------------------------------------------------------------------------*/

      //3.Enrollment No. Dropdown Validations
      if (document.frm.enroll_no.selectedIndex == 0) {
        document.getElementById('enerror').innerHTML = "**Please Enter Address";
        document.frm.enroll_no.focus();
        return false;
      } else {
        document.getElementById('ennerror').innerHTML = "";
      }

      /*-------------------------------------------------------------------------------------------------------------*/

      //4.Name Dropdown Validations
      if (document.frm.sname.selectedIndex == 0) {
        document.getElementById('enerror').innerHTML = "**Please Enter Name of the Student";
        document.frm.sname.focus();
        return false;
      } else {
        if (document.frm.fname.value.search(n) == -1) {
          document.getElementById('serrorname').innerHTML = "**Please Enter A Valid Name";
          document.frm.sname.focus();
          return false;
        } else {
          document.getElementById('serrorname').innerHTML = "";
        }
      }
      /*-------------------------------------------------------------------------------------------------------------*/

      //5.Branch Dropdown Validations
      if (document.frm.branch.selectedIndex == 0) {
        document.getElementById('berror').innerHTML = "**Please Select Branch";
        document.frm.branch.focus();
        return false;
      } else //to clear the error if user select correct option
      {
        document.getElementById('berror').innerHTML = "";
      }

      /*-------------------------------------------------------------------------------------------------------------*/

      //6.Father's Name Validations
      if (document.frm.fname.value == "") {
        document.getElementById('ferrorname').innerHTML = "**Please Enter Father's Name";
        document.frm.fname.focus();
        return false;
      } else {
        if (document.frm.fname.value.search(n) == -1) {
          document.getElementById('ferrorname').innerHTML = "**Please Enter A Valid Name";
          document.frm.fname.focus();
          return false;
        } else {
          document.getElementById('ferrorname').innerHTML = "";
        }
      }


      /*-------------------------------------------------------------------------------------------------------------*/

      //7.Mother's Name Validations
      if (document.frm.mname.value == "") {
        document.getElementById('merrorname').innerHTML = "**Please Enter Mother's Name";
        document.frm.mname.focus();
        return false;
      } else {
        if (document.frm.mname.value.search(n) == -1) {
          document.getElementById('merrorname').innerHTML = "**Please Enter A Valid Name";
          document.frm.mname.focus();
          return false;
        } else {
          document.getElementById('ferrorname').innerHTML = "";
        }

      }
      /*-------------------------------------------------------------------------------------------------------------*/
      //8. Result's Date Validations
      if (document.frm.date.value == "") {
        document.getElementById('derrorname').innerHTML = "**Please Enter Date";
        document.frm.mname.focus();
        return false;
      } else {
        if (document.frm.mname.value.search(n) == -1) {
          document.getElementById('derrorname').innerHTML = "**Please Enter A Valid Date";
          document.frm.mname.focus();
          return false;
        } else {
          document.getElementById('derrorname').innerHTML = "";
        }

      }
      //9. Roll No's Validations
      if (document.frm.roll_no.value == "") {
        document.getElementById('derrorname').innerHTML = "**Please Enter Roll No";
        document.frm.mname.focus();
        return false;
      } else {
        if (document.frm.mname.value.search(n) == -1) {
          document.getElementById('derrorname').innerHTML = "**Please Enter A Valid Roll No";
          document.frm.mname.focus();
          return false;
        } else {
          document.getElementById('derrorname').innerHTML = "";
        }

      }

      /*-------------------------------------------------------------------------------------------------------------*/

      if (document.frm.cam1.value == "" || document.frm.cam2.value == "" || document.frm.dldm1.value == "" || document.frm.dldm2.value == "" || document.frm.tefm1.value == "" || document.frm.tefm2.value == "" || document.frm.dbmsm1.value == "" || document.frm.dbmsm2.value == "" || document.frm.osm1.value == "" || document.frm.osm2.value == "" || document.frm.adsm1.value == "" || document.frm.adsm2.value == "" || document.frm.tefm1.value == "" || document.frm.tefm1.value == "" || document.frm.dbmslabm1.value == "" || document.frm.dbmslabm2.value == "" || document.frm.umlm1.value == "" || document.frm.umlm2.value == "" || document.frm.oslm1.value == "" || document.frm.oslm2.value == "" || document.frm.dhdlm1.value == "" || document.frm.dhdlm2.value == "") {
        document.getElementById('markserror').innerHTML = "**You can't Leave Any of the Marks Field Blank";
      }

    }
  </script>
</head>

<body>
     

  <form action="marksheet.php" method="post"  onsubmit="return check()">
    <table width="1148" height="745" border="0" align="center">
      <tr>
        <td width="400" height="115"><img src="images/logo.png" width="216" height="216"></td>

        <td height="80" colspan="3" bgcolor="#2fb3fa">
          <p align="center" class="style1">Berean English Medium School</p>
          <p align="center" class="style1"><img src="images/logo--hindinew.png"></p>
          <p align="center" class="style1">Marksheet Input Details </p>
        </td>
      </tr>
      <tr>
        <td width="400" height="24" align="left"><strong>School Name:</strong></td>
        <td colspan="2" align="left"><label>
            <select name="college">
              <option>---School---</option>
              <option>Berean English Medium School</option>

            </select><span class="style4" id="cerror"></span>
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><strong>Roll No.</strong></td>
        <td colspan="2" align="left"><label>
            <input type="text" name="roll_no" />
            <span class="style4" id="ferrorname"></span>
          </label></td>
      </tr>

      </select><span class="style4" id="rnerror"></span>
      </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><strong>Address </strong></td>
        <td colspan="2" align="left"><label>
            <input type="text" name="enroll_no" />
            <span class="style4" id="ennerror"></span>
          </label></td>
      </tr>

      <tr>
        <td height="24" align="left"><strong>Name of the Candidate</strong></td>
        <td colspan="2" align="left"><label>
            <input type="text" name="sname" />

          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><strong>Date of Result</strong></td>
        <td colspan="2" align="left"><label>
            <input type="text" name="date" />
            <span class="style4" id="date"></span>
          </label></td>
      </tr>

      <tr>
        <td height="31" align="left"><strong>Class</strong></td>
        <td colspan="2" align="left"><label>
            <select name="branch">
              <option>---Select Class---</option>
              <option>I</option>
              <option>II</option>
              <option>III</option>


            </select><span class="style4" id="berror"></span>
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><strong>Father's Name </strong></td>
        <td colspan="2" align="left"><label>
            <input type="text" name="fname" />
            <span class="style4" id="ferrorname"></span>
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><strong>Mother's Name </strong></td>
        <td colspan="2" align="left"><input type="text" name="mname" /><span class="style4" id="merrorname"></span></td>
      </tr>
      <tr>
        <td height="28" align="left"><strong>SUB.NAME And EXAMINATION </strong></td>

        <td width="393" align="left">
          <p><strong>Term 1</strong></p>
          <p><span class="style3">**Pt Should be Given Out of 10</span></p>
          <p><span class="style3">**Note Book 1 Should be Given Out of 5</span></p>
          <p><span class="style3">**S.Enrichment Should be Given Out of 5</span></p>
          <p><span class="style3">**Half Yearly Exam Should be Given Out of 80</span></p>
        </td>
        <td width="341" align="left">
          <p><strong>Term 2</strong></p>
          <p><span class="style3">**Pt Should be Given Out of 10</span></p>
          <p><span class="style3">**Note Book 1 Should be Given Out of 5</span></p>
          <p><span class="style3">**S.Enrichment Should be Given Out of 5</span></p>
          <p><span class="style3">**Yearly Exam Should be Given Out of 80</span></p>
        </td>
      </tr>
      <td height="28" align="left"><strong>ENGLISH------- </strong></td>
      <tr>
        <td height="24" align="left"><label>ENGLISH PT</label></td>
        <td align="left"><input type="text" name="engpt1" /></td>
        <td align="left"><label>
            <input type="text" name="engpt2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENGLISH NOTEBOOK </label></td>
        <td align="left"><input type="text" name="engnb1" /></td>
        <td align="left"><label>
            <input type="text" name="engnb2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENGLISH S.ENRICHMENT</label></td>
        <td align="left"><input type="text" name="engse1" /></td>
        <td align="left"><label>
            <input type="text" name="engse2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENGLISH HALF/YEARLY</label></td>
        <td align="left"><input type="text" name="eng1" /></td>
        <td align="left"><label>
            <input type="text" name="eng2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENGLISH GRADE</label></td>
        <td align="left"><input type="text" name="engrem" /></td>

      </tr>
      <td height="28" align="left"><strong>MATHEMATICS------- </strong></td>
      <tr>
        <td height="24" align="left"><label>MATHEMATICS PT </label></td>
        <td align="left"><label>
            <input type="text" name="bengpt1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="bengpt2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>MATHEMATICS NOTEBOOK </label></td>
        <td align="left"><label>
            <input type="text" name="bengnb1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="bengnb2" />
          </label></td>
      </tr>

      <tr>
        <td height="24" align="left"><label>MATHEMATICS S.ENRICHMENT </label></td>
        <td align="left"><label>
            <input type="text" name="bengse1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="bengse2" />
          </label></td>
      </tr>

      <tr>
        <td height="24" align="left"><label>MATHEMATICS HALF/YEARLY </label></td>
        <td align="left"><label>
            <input type="text" name="beng1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="beng2" />
          </label></td>

      </tr>
      <tr>
        <td height="24" align="left"><label>MATHEMATICS GRADE</label></td>
        <td align="left"><input type="text" name="bengrem" /></td>

      </tr>
      </tr>
      <td height="28" align="left"><strong>ENVIRONMENTAL STUDIES------- </strong></td>
      <tr>
        <td height="24" align="left"><label>ENVIRONMENTAL STUDIES PT</label></td>
        <td align="left"><label>
            <input type="text" name="rhypt1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="rhypt2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENVIRONMENTAL STUDIES NOTEBOOK</label></td>
        <td align="left"><label>
            <input type="text" name="rhynb1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="rhynb2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENVIRONMENTAL STUDIES S.ENRICHMENT</label></td>
        <td align="left"><label>
            <input type="text" name="rhyse1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="rhyse2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENVIRONMENTAL STUDIES HALF/YEARLY</label></td>
        <td align="left"><label>
            <input type="text" name="rhy1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="rhy2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ENVIRONMENTAL STUDIES GRADE</label></td>
        <td align="left"><input type="text" name="rhyrem" /></td>

      </tr>
      <td height="28" align="left"><strong>COMPUTER(OUT OF 50)------- </strong></td>
      
      <tr>
        <td height="24" align="left"><label>COMPUTER(OUT OF 50) HALF/YEARLY</label></td>
        <td align="left"><label>
            <input type="text" name="dic1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="dic2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>COMPUTER(OUT OF 50) GRADE</label></td>
        <td align="left"><input type="text" name="dicrem" /></td>

      </tr>
      <td height="28" align="left"><strong>HINDI(OUT OF 50)------- </strong></td>
     
      <tr>
        <td height="24" align="left"><label>HINDI(OUT OF 50) HALF/YEARLY</label></td>
        <td align="left"><label>
            <input type="text" name="conv1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="conv2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>HINDI(OUT OF 50) GRADE</label></td>
        <td align="left"><input type="text" name="conrem" /></td>

      </tr>
      <td height="28" align="left"><strong>BENGALI------- </strong></td>
      <tr>
        <td height="24" align="left"><label>BENGALI PT</label></td>
        <td align="left"><label>
            <input type="text" name="drawpt1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="drawpt2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>BENGALI NOTEBOOK</label></td>
        <td align="left"><label>
            <input type="text" name="drawnb1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="drawnb2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>BENGALI S.ENRICHMENT</label></td>
        <td align="left"><label>
            <input type="text" name="drawse1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="drawse2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>BENGALI HALF/YEARLY</label></td>
        <td align="left"><label>
            <input type="text" name="draw1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="draw2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>BENGALI GRADE</label></td>
        <td align="left"><input type="text" name="drawrem" /></td>

      </tr>
      <td height="28" align="left"><strong>MORAL SCIENCE(OUT OF 50)------- </strong></td>
      
      <tr>
        <td height="24" align="left"><label>MORAL SCIENCE(OUT OF 50) HALF/YEARLY</label></td>
        <td align="left"><label>
            <input type="text" name="cur1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="cur2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>MORAL SCIENCE(OUT OF 50) GRADE</label></td>
        <td align="left"><input type="text" name="currem" /></td>

      </tr>


      <tr>
        <td height="24" colspan="3" align="left"><span class="style3">**CO-SCHOLASTIC AREAS(ON 5 POINT (A-E) GRADING SCALE)</span></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>WORK EDUCATION</label></td>
        <td align="left"><label>
            <input type="text" name="work1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="work2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>ART EDUCATION</label></td>
        <td align="left"><label>
            <input type="text" name="art1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="art2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>HEALTH AND PHYSICAL EDUCATION</label></td>
        <td align="left"><label>
            <input type="text" name="health1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="health2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left">DISCIPLINE</td>
        <td align="left"><input type="text" name="dis1" />
        </td>
        <td align="left"><input type="text" name="dis2" />
        </td>
      </tr>
      <tr>
        <td height="24" align="left"><label>SPORTS</label></td>
        <td align="left"><label>
            <input type="text" name="sport1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="sport2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" colspan="3" align="left"><span class="style3">** OVERALL GRADES AND RANK</span></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>RANK</label></td>
        <td align="left"><label>
            <input type="text" name="rank" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>OVERALL GRADE</label></td>
        <td align="left"><label>
            <input type="text" name="og" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>REMARK</label></td>
        <td align="left"><label>
            <input type="text" name="remark" />
          </label></td>
      </tr>
      <tr>
        <td height="24" colspan="3" align="left"><span class="style3">**OTHERS</span></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>NO. OF WORKING DAYS</label></td>
        <td align="left"><label>
            <input type="text" name="workdays1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="workdays2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>NO. OF PRESENT</label></td>
        <td align="left"><label>
            <input type="text" name="present1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="present2" />
          </label></td>
      </tr>
      <tr>
        <td height="24" align="left"><label>NO. OF STUDENTS IN THE CLASS</label></td>
        <td align="left"><label>
            <input type="text" name="stuclass1" />
          </label></td>
        <td align="left"><label>
            <input type="text" name="stuclass2" />
          </label></td>
      </tr>
      </hr>
       <tr>
        <td height="24" align="left"><label><b>***PASTE YOUR IMAGE URL FROM UPLOAD IMAGE HERE</b></label></td>
        <td align="left"><label>
            <input type="text" name="image" />
          </label></td>
       
      </tr>
     

      <tr>
        <td height="42" colspan="3" align="left"><span class="style4" id="markserror"></span></td>
      </tr>
      <tr>
        <td height="24" colspan="3" align="left"><label>
            <div align="center">
              <input type="submit" name="Submit" value="Generate Marksheet" />
              <br>
              <br>
              <label>
                <input type="reset" name="Submit2" value="Reset Marksheet" />
              </label>
             
              <label><input type="button" value="Check Data"
onclick="window.open('https://bereanschooltripura.org/marksheetdata/class1/lol/')">
</label>
<label><input type="button" value="Upload Photo For Url"
onclick="window.open('https://bereanschooltripura.org/marksheetdata/upload/')">
</label>
            </div>
           
          </label></td>
      </tr>
    </table>
  </form>
   <hr>
   
</body>



</html>
