import { Typography } from "@mui/material"
import Navbar from "../components/Navbar"
import NewCard from "../components/NewCard"

const ForniteNews = () => {
  return (
    <>
      <Navbar />
      <div style={{paddingTop: 80}}>
        <Typography gutterBottom variant="h3" textAlign={"center"}>
          Today's top news about Fortnite
        </Typography>
      </div>
      <NewCard />
    </>
  )
}
export default ForniteNews