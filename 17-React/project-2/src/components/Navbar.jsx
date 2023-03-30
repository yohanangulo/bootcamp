import AppBar from "@mui/material/AppBar";
import Box from "@mui/material/Box";
import Toolbar from "@mui/material/Toolbar";
import Typography from "@mui/material/Typography";
import { Container } from "@mui/system";
import Logo from "./logo";
import { Link, useNavigate } from "react-router-dom";

const Navbar = () => {

  const navigate = useNavigate()

  return (
    <>
      <Box>
        <AppBar position="static" sx={{ padding: 1, background: "#202329" }}>
          <Container>
            <Toolbar>
              <Typography variant="h6" component="div" sx={{ flexGrow: 1, cursor: 'pointer' }} onClick={() => navigate('/')}>
                Characters
              </Typography>
              <Link to={"/"}>
                <Logo />
              </Link>
            </Toolbar>
          </Container>
        </AppBar>
      </Box>
    </>
  );
};
export default Navbar;
