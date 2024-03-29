import Card from "@mui/material/Card";
import CardActions from "@mui/material/CardActions";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Button from "@mui/material/Button";
import Typography from "@mui/material/Typography";
import { Grid } from "@mui/material";
import { Container } from "@mui/system";
import { useEffect, useState } from "react";

export default function NewCard() {
  const [data, setData] = useState([])
  useEffect(() => {
    fetch('https://fortnite-api.com/v2/news')
      .then(res => res.json())
      .then(res => setData(res.data.br.motds))
  })

  return (
    <div style={{paddingTop: '40px', paddingBottom: '80px'}}>
    <Container>
        <Grid container spacing={4}>
      {data.map((el) => (
        <Grid md={6} item>
        <Card  >
          <CardMedia
            sx={{ height: 300 }}
            image={el.image}
          />
          <CardContent>
            <Typography gutterBottom variant="h5" component="div">
              {el.title}
            </Typography>
            <Typography variant="body2" sx={{minHeight: 65}} color="text.secondary">
              {el.body}
            </Typography>
          </CardContent>
          <CardActions>
            <Button size="small">Share</Button>
            <Button size="small">Learn More</Button>
          </CardActions>
        </Card>
         </Grid>
      ))}
        </Grid>
        </Container>
    </div>
  );
}
