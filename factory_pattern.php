<?php

// User Interface: All user types should implement this interface
interface User {
    public function getRole();
    public function getPermissions();
}

// Admin User class
class AdminUser implements User {
    public function getRole() {
        return "Admin";
    }

    public function getPermissions() {
        return ["manage_users", "view_reports", "edit_settings"];
    }
}

// Member User class
class MemberUser implements User {
    public function getRole() {
        return "Member";
    }

    public function getPermissions() {
        return ["view_content", "comment_on_posts"];
    }
}

// Guest User class
class GuestUser implements User {
    public function getRole() {
        return "Guest";
    }

    public function getPermissions() {
        return ["view_content"];
    }
}

// UserFactory: A factory class that returns different types of users based on input
class UserFactory {
    public static function createUser($type) {
        switch ($type) {
            case 'admin':
                return new AdminUser();
            case 'member':
                return new MemberUser();
            case 'guest':
                return new GuestUser();
            default:
                throw new Exception("Invalid user type");
        }
    }
}

// Example usage: Creating different types of users
try {
    // Create an Admin user
    $admin = UserFactory::createUser("admin");
    echo "Role: " . $admin->getRole() . "\n";
    echo "Permissions: " . implode(", ", $admin->getPermissions()) . "\n";

    // Create a Member user
    $member = UserFactory::createUser("member");
    echo "Role: " . $member->getRole() . "\n";
    echo "Permissions: " . implode(", ", $member->getPermissions()) . "\n";

    // Create a Guest user
    $guest = UserFactory::createUser("guest");
    echo "Role: " . $guest->getRole() . "\n";
    echo "Permissions: " . implode(", ", $guest->getPermissions()) . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
