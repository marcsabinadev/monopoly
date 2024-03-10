export class User {
    #username: string;
    #email: string;
    #password: string;


    constructor(username: string, password: string, email: string = '') {
        this.#username = username;
        this.#email = email;
        this.#password = password;
    }

    get username(): string {
        return this.#username
    }

    set username(username: string) {
        this.#username = username;
    }

    get email(): string {
        return this.#email
    }

    set email(email: string) {
        this.#email = email;
    }

    get password(): string {
        return this.#password;
    }

    set password(password: string) {
        this.#password = password;
    }

}