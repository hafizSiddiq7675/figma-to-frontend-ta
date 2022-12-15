import * as React from 'react';
import { styled } from '@mui/material/styles';
import Grid from '@mui/material/Grid';
import Paper from '@mui/material/Paper';
import Typography from '@mui/material/Typography';
import ButtonBase from '@mui/material/ButtonBase';
import { width } from '@mui/system';
import  Image from './images/phone.png';
import  Image1 from './images/email.png';
import  Image2 from './images/location.png';

const Img = styled('img')({
  margin: 'auto',
  display: 'block',
  maxWidth: '100%',
  maxHeight: '100%',
});

export default function ComplexGrid() {
  return (
    <Paper
      sx={{
        p: 2,
        margin: 'auto',
        maxWidth: 1000,
        flexGrow: 2,
        backgroundColor: (theme) =>
          theme.palette.mode === 'dark' ? '#1A2027' : '#fff',

      }}
    >
      <Grid container spacing={2}>
        <Grid item xs={6} md={6} lg={6}>
        <Grid style={{backgroundColor:'rgb(166, 96, 175)',color:'white',textAlign:'center',fontFamily:'cursive',fontSize: 24,paddingTop: "100px",}}>
          <p >Name</p>
          <p>Job Position</p>
          <p style={{textDecoration:"und"}}>About Us</p>
          <p style={{fontSize:14,padding:'40px'}}>Lorem Ipsum is simply dummy text of
            the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown
             took a galley of type and scrambled it to make
              a type specimen book. It has survived not only five
              centuries, but also the leap into electronic typesetting,
              remaining essentially unchanged. It was popularised i
              n the 1960s with the release of Letraset sheets containing Lore
              m Ipsum passages, and more recently with

            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </Grid>
        <Grid>
 <Grid>
              <Button className='btn btn-primary' style={{backgroundColor:"rgb(166, 96, 175)",border:'none',color:'white',width:300,fontFamily: 'cursive'}}>Contact</Button>
              <Grid style={{display:'flex',flexDirection:'row'}}>
                <Grid  style={{display:'flex',flexDirection:'column',paddingRight:'22px'}}>
                     <img src={Image} alt="phone" style={{paddingTop:'20px',paddingBottom:'10px'}}/>
                     <img src={Image1} alt="email" style={{paddingTop:'11px'}}/>
                     <img src={Image2} alt="location" style={{paddingTop:'20px'}}/>
                </Grid>
                 <Grid style={{fontFamily:'cursive'}}>
                  <p>Phone No</p>
                  <p>Email</p>
                  <p>Address</p>
                  </Grid>
                </Grid>
              </Grid>
              <Grid>
              <button style={{backgroundColor:"rgb(166, 96, 175)",border:'none',color:'white',width:300,fontFamily: 'cursive'}}>Education</button>
              <Grid>
                  <Grid style={{display:'flex',flexDirection:'row',fontFamily: 'cursive',fontWeight:'bolder'}}>
                  <p>Bachelor degree</p>
                  <p style={{paddingLeft:'51px'}}>(year)</p>
                  </Grid>
                  <p style={{fontFamily:'cursive'}}>Name of institute</p>

                  <Grid style={{display:'flex',flexDirection:'row',fontWeight:'bolder',fontFamily: 'cursive'}}>
                  <p>Master degree</p>
                  <p style={{paddingLeft:'65px'}}>(year)</p>
                  </Grid>
                  <p style={{fontFamily:'cursive'}}>Name of institute</p>



              </Grid>
              </Grid>


        </Grid>
        </Grid>

        <Grid item xs={3} md={3} lg={6}>
        <Grid>
          <Grid style={{ height:250, width:400, borderWidth: 5,border:'10px solid rgb(205, 165, 210)',marginTop: "80px",marginLeft: "-100px"}}>
            <button style={{border:'none',margin:'124px',backgroundColor:"rgb(205, 165, 210)",color:'purple',padding:'3px',fontSize:'16px',fontFamily:'cursive',fontWeight:'bolder'}}>
              Select image

            </button>

          </Grid>

        </Grid>
              <Grid>
              <button style={{backgroundColor:"rgb(166, 96, 175)",border:'none',color:'white',width:300,marginTop:'40px',fontFamily: 'cursive'}}>experience</button>
              <Grid>
              <Grid>
                  <Grid style={{display:'flex',flexDirection:'row',fontFamily: 'cursive',fontWeight:'bolder'}}>
                  <p>Junior designer</p>
                  <p style={{paddingLeft:'66px'}}>(year)</p>
                  </Grid>
                  <p style={{fontFamily:'cursive'}}>Name of company</p>

                  <Grid style={{display:'flex',flexDirection:'row',fontFamily:'cursive',fontWeight:'bolder'}}>
                  <p>Senior designer</p>
                  <p style={{paddingLeft:'65px'}}>(year)</p>
                  </Grid>
                  <p style={{fontFamily:'cursive'}}>Name of company</p>
              </Grid>
         </Grid>
              </Grid>
              <Grid>
              <button style={{backgroundColor:"rgb(166, 96, 175)",border:'none',color:'white',width:300,fontFamily: 'cursive'}}>Skills</button>
                  <Grid style={{fontFamily:'cursive'}}>
                  <p>Programming</p>
                  <p>Developing</p>
                  <p>Coding</p>
                  </Grid>
              </Grid>
              <Grid>
              <button style={{backgroundColor:"rgb(166, 96, 175)",border:'none',color:'white',width:300,fontFamily: 'cursive'}}>Languages</button>
              <Grid style={{fontFamily:'cursive'}}>
                   <p>English </p>
                  <p>Urdu</p>
                  <p>German</p>
               </Grid>
              </Grid>
        </Grid>
      </Grid>
    </Paper>
  );
}
