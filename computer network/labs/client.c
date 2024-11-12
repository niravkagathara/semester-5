#include <winsock2.h>
#include <ws2tcpip.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#pragma comment(lib, "ws2_32.lib") // Link with ws2_32.lib

#define PORT 8080

int main(int argc, char const* argv[])
{
    WSADATA wsaData;
    SOCKET client_fd;
    struct sockaddr_in serv_addr;
    char buffer[1024] = { 0 };

    // Initialize Winsock
    if (WSAStartup(MAKEWORD(2, 2), &wsaData) != 0) {
        printf("WSAStartup failed\n");
        return -1;
    }

    // Creating socket file descriptor
    if ((client_fd = socket(AF_INET, SOCK_STREAM, 0)) == INVALID_SOCKET) {
        printf("Socket creation error\n");
        WSACleanup();
        return -1;
    }

    serv_addr.sin_family = AF_INET;
    serv_addr.sin_port = htons(PORT);

    // Convert IPv4 address from text to binary form
serv_addr.sin_addr.s_addr = inet_addr("127.0.0.1");
if (serv_addr.sin_addr.s_addr == INADDR_NONE) {
        printf("Invalid address/ Address not supported\n");
        closesocket(client_fd);
        WSACleanup();
        return -1;
    }

    // Connect to the server
    if (connect(client_fd, (struct sockaddr*)&serv_addr, sizeof(serv_addr)) == SOCKET_ERROR) {
        printf("Connection failed\n");
        closesocket(client_fd);
        WSACleanup();
        return -1;
    }

    // Rest of your code...

    // Close the connected socket
    closesocket(client_fd);
    WSACleanup();
    return 0;
}
