import AppBar from "@mui/material/AppBar";
import Box from "@mui/material/Box";
import Toolbar from "@mui/material/Toolbar";
import Typography from "@mui/material/Typography";
import FeedIcon from "@mui/icons-material/Feed";
import { Container } from "@mui/system";

const Navbar = () => {

  const logoStyles = {
    width: '38px',
    borderRadius: '99px'
  }

  return (
    <Box>
      <AppBar position="static">
        <Container>
          <Toolbar>
            <FeedIcon
              size="large"
              edge="start"
              color="inherit"
              aria-label="menu"
              sx={{ mr: 2 }}
            />
            <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
              Fortnite News
            </Typography>
            <img
              style={logoStyles}
              src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Fortnite_F_lettermark_logo.png"
              alt=""
            />
          </Toolbar>
        </Container>
      </AppBar>
    </Box>
  );
};
export default Navbar;
