import Card from "@mui/material/Card";
import CardActions from "@mui/material/CardActions";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Button from "@mui/material/Button";
import Typography from "@mui/material/Typography";
import { CardActionArea, Grid } from "@mui/material";
import { Container } from "@mui/system";
import { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";

export const CharacterCard = () => {
  
  const [data, setData] = useState([])
  const [isLoading, setIsLoading] = useState(true)

  useEffect(() => {
    fetch('https://rickandmortyapi.com/api/character')
      .then(res => res.json())
      .then(res => {
        setData(res.results)
        setIsLoading(false)
      })
  }, [])

  const navigate = useNavigate()

  return (
    <div style={{ paddingTop: "40px", paddingBottom: "80px" }}>
      <Container>
        <Grid container spacing={4}>
          {isLoading ? (
            <p>Loading</p>
          ) : (
            data.map((el) => (
              <Grid md={4} item key={el.id}>
                <Card>
                  <CardActionArea  onClick={() => navigate(`/character/${el.id}`)} >
                  <CardMedia sx={{ height: 300 }} image={el.image} />
                  <CardContent>
                    <Typography gutterBottom variant="h5" component="div">
                      {el.name}
                    </Typography>
                    <Typography
                      variant="body2"
                      color="text.secondary"
                    >
                      {el.status}
                    </Typography>
                  </CardContent>
                  </CardActionArea>
                  <CardActions>
                      <Button size="small">Details</Button>
                  </CardActions>
                </Card>
              </Grid>
            ))
          )}
        </Grid>
      </Container>
    </div>
  );
};
