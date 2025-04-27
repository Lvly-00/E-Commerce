import {
    Anchor,
    Button,
    Checkbox,
    MantineProvider,
    Paper,
    PasswordInput,
    Text,
    TextInput,
    Title,
} from "@mantine/core";
import classes from "../../css/Components/Login.module.css";
import GuestHeader from "../Components/GuestHeader";


function Login() {
    return (
        <MantineProvider>
            <GuestHeader />
            <div className={classes.wrapper}>
                <Paper className={classes.form} radius={0} p={30}>
                    <Title
                        order={2}
                        className={classes.title}
                        ta="center"
                        mt="md"
                        mb={50}
                    >
                        Welcome back to Mantine!
                    </Title>

                    <TextInput
                        label="Email address"
                        placeholder="hello@gmail.com"
                        size="md"
                    />
                    <PasswordInput
                        label="Password"
                        placeholder="Your password"
                        mt="md"
                        size="md"
                    />
                    <Checkbox label="Keep me logged in" mt="xl" size="md" />
                    <Button fullWidth mt="xl" size="md">
                        Login
                    </Button>

                    <Text ta="center" mt="md">
                        Don&apos;t have an account?{" "}
                        <Anchor
                            href="#"
                            fw={700}
                            onClick={(event) => event.preventDefault()}
                        >
                            Register
                        </Anchor>
                    </Text>
                </Paper>
            </div>
        </MantineProvider>
    );
}
export default Login;
