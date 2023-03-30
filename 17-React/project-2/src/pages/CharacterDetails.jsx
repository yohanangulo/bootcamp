import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import Navbar from "../components/Navbar";

import Box from "@mui/material/Box";
import Card from "@mui/material/Card";
import CardActions from "@mui/material/CardActions";
import CardContent from "@mui/material/CardContent";
import Button from "@mui/material/Button";
import Typography from "@mui/material/Typography";

const CharacterDetails = () => {
  const { id } = useParams();
  const [data, setData] = useState({});
  const [isLoading, setisLoading] = useState(true);

  useEffect(() => {
    fetch(`https://rickandmortyapi.com/api/character/${id}`)
      .then((res) => res.json())
      .then((res) => {
        setData(res);
        setisLoading(false);
      });
  }, []);

  console.log(data.origin);

  const imgStyles = {
    margin: "auto",
    display: "block",
    borderRadius: 9999,
    marginTop: 30,
  };

  return (
    <>
      <Navbar />

      {isLoading ? (
        <h1>Loading</h1>
      ) : (
        <Card
          sx={{ maxWidth: 800, margin: "auto", marginTop: "40px", mb: "40px" }}
        >
          <CardContent sx={{ textAlign: "center" }}>
            <img src={data.image} alt="" style={imgStyles} />

            <Typography variant="h5" component="div" sx={{ mt: 5 }}>
              {data.name}
            </Typography>

            <Typography sx={{ mb: 1.5 }} color="text.secondary">
              <b>Status:</b> {data.status}
            </Typography>

            <Typography sx={{ mb: 1.5 }} color="text.secondary">
              <b>species:</b> {data.species}
            </Typography>

            <Typography sx={{ mb: 1.5 }} color="text.secondary">
              <b>Origin:</b> {data.origin.name}
            </Typography>
          </CardContent>
          <CardActions>
            <Button size="small">Learn More</Button>
          </CardActions>
        </Card>
      )}
    </>
  );
};
export default CharacterDetails;
