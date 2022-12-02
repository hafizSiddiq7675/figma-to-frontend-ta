import * as React from 'react';
import { styled } from '@mui/material/styles';
import Grid from '@mui/material/Grid';
import Paper from '@mui/material/Paper';
import Typography from '@mui/material/Typography';
import ButtonBase from '@mui/material/ButtonBase';

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
        <Grid style={{backgroundColor:'darkviolet',color:'white',textAlign:'center',fontFamily:'cursive',fontSize: 24,paddingTop: "100px"}}>
          <p >Name</p>
          <p>Job Position</p>
          <p>About Us</p>
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
        </Grid>
      
        <Grid item xs={3} md={3} lg={6}>
        <Grid>
          <Grid style={{ height:250, width:400, borderWidth: 5,border:'10px solid #da70d6',marginTop: "80px",marginLeft: "-100px"}}>
            <button style={{border:'1px solid purple'}}>
              Select image
       
            </button>
            <img></img>
          </Grid>
         
        </Grid>
        </Grid>
      </Grid>
    </Paper>
  );
}