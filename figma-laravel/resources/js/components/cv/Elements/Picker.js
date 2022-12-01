import React from "react";
import Box from '@mui/material/Box';
import Paper from '@mui/material/Paper';
import { red } from "@mui/material/colors";
import Container from '@mui/material/Container';
import Grid from '@mui/material/Grid';










export default function Picker(){
    const Item = styled(Paper)(({ theme }) => ({
        backgroundColor: theme.palette.mode === 'dark' ? '#1A2027' : '#fff',
        ...theme.typography.body2,
        padding: theme.spacing(1),
        textAlign: 'center',
        color: theme.palette.text.secondary,
      }));
    return(
        <>


    <Box
    
      sx={{
        display: 'flex',
        '& > :not(style)': {
            m:5,
            margin: "0px 300px",
            backgroundColor: "whitesmoke",
            width: 850,
            boxShadow: '1px 2px 9px grey',
            border:'10px solid white'
        
        },
      }}
    >
      {/* <Paper variant="outlined"  /> */}
      
      <Box sx={{ flexGrow: 1 }}>
      <Grid container spacing={2}>
        <Grid item xs={8}>
          <Item>xs=8</Item>
        </Grid>
        <Grid item xs={4}>
          <Item>xs=4</Item>
        </Grid>
        <Grid item xs={4}>
          <Item>xs=4</Item>
        </Grid>
        <Grid item xs={8}>
          <Item>xs=8</Item>
        </Grid>
      </Grid>
    </Box>    

    </Box>

        </>
    )
    
}
