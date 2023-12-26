#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define MAX_QUEUE_SIZE 5
#define TOTAL_CUSTOMERS 1000

typedef struct {
    int arrival_time;
    int service_time;
    int type; // 0: Tarik Tunai, 1: Setor Tunai, 2: Non Tunai
} Customer;

typedef struct {
    int front, rear;
    int items[MAX_QUEUE_SIZE];
} Queue;

Customer initializeCustomer() {
    Customer customer;
    customer.arrival_time = rand() % 11; // Selisih waktu kedatangan antara 0-10 menit
    customer.service_time = 2 + rand() % 11; // Lama waktu penggunaan antara 2-12 menit
    customer.type = rand() % 100 < 50 ? 0 : (rand() % 100 < 30 ? 1 : 2); // Pembagian jenis layanan
    return customer;
}

Queue* createQueue() {
    Queue* queue = (Queue*)malloc(sizeof(Queue));
    queue->front = queue->rear = -1;
    return queue;
}

int isEmpty(Queue* queue) {
    return queue->front == -1;
}

void enqueue(Queue* queue, int item) {
    if (queue->rear == MAX_QUEUE_SIZE - 1) {
        printf("Maaf, nasabah ditolak karena melebihi maksimal jumlah antrian\n");
        return;
    }

    if (isEmpty(queue)) {
        queue->front = 0;
    }
    queue->rear++;
    queue->items[queue->rear] = item;
}

int dequeue(Queue* queue) {
    int item;
    if (isEmpty(queue)) {
        item = -1;
    } else {
        item = queue->items[queue->front];
        queue->front++;
        if (queue->front > queue->rear) {
            queue->front = queue->rear = -1;
        }
    }
    return item;
}

int main() {
    srand(time(NULL));

    int total_customers = 0;
    int total_rejected = 0;
    int total_service_time = 0;
    int total_tarik_tunai = 0;
    int total_setor_tunai = 0;
    int total_non_tunai = 0;
    int total_non_tunai_setor_tunai = 0;

    int current_time = 0;
    Queue* queue_tarik_tunai = createQueue();
    Queue* queue_setor_tunai = createQueue();

    // ...

// ...
// ...

// ...

// ...

while (total_customers < TOTAL_CUSTOMERS) {
    Customer new_customer = initializeCustomer();
    printf("Nasabah baru datang pada waktu %d menit untuk layanan ", current_time + new_customer.arrival_time);

    Queue* current_queue;
    if (new_customer.type == 0) {
        current_queue = queue_tarik_tunai;
    } else if (new_customer.type == 1) {
        current_queue = queue_setor_tunai;
    } else {
        if (isEmpty(queue_setor_tunai) || (queue_tarik_tunai->rear - queue_tarik_tunai->front < MAX_QUEUE_SIZE - 1)) {
            current_queue = queue_setor_tunai;
        } else {
            printf("Maaf, nasabah ditolak karena melebihi maksimal jumlah antrian\n");
            total_rejected++;
            continue;
        }
    }

    int service_start_time = current_time + new_customer.arrival_time;
    int service_end_time = service_start_time + new_customer.service_time;

    if (!isEmpty(current_queue) && current_queue->rear - current_queue->front >= MAX_QUEUE_SIZE - 1) {
        printf("Maaf, nasabah ditolak karena melebihi maksimal jumlah antrian\n");
        total_rejected++;
        continue;
    }

    enqueue(current_queue, service_end_time);
    total_service_time += new_customer.service_time;
    total_customers++;
c
    if (new_customer.type == 0) {
        total_tarik_tunai++;
    } else if (new_customer.type == 1) {
        total_setor_tunai++;
    } else {
        total_non_tunai++;
        if (current_queue == queue_setor_tunai) {
            total_non_tunai_setor_tunai++;
        }
    }

    printf("Nasabah ");
    if (new_customer.type == 0) {
        printf("Tarik Tunai");
    } else if (new_customer.type == 1) {
        printf("Setor Tunai");
    } else {
        printf("Non Tunai");
    }
    printf(" dilayani mulai waktu %d menit hingga %d menit\n", service_start_time, service_end_time);

    current_time += new_customer.arrival_time;
}

// ...




    float average_arrival_time = (float)current_time / TOTAL_CUSTOMERS;
    float average_tarik_tunai_time = (float)total_service_time / total_tarik_tunai;
    float average_setor_tunai_time = (float)total_service_time / total_setor_tunai;

    printf("\nHasil Simulasi:\n");
    printf("a. Rata-rata waktu kedatangan nasabah: %.2f menit\n", average_arrival_time);
    printf("b. Rata-rata lama waktu penggunaan untuk Tarik Tunai: %.2f menit\n", average_tarik_tunai_time);
    printf("   Rata-rata lama waktu penggunaan untuk Setor Tunai: %.2f menit\n", average_setor_tunai_time);
    printf("c. Jumlah nasabah yang menggunakan ATM Tarik Tunai: %d\n", total_tarik_tunai);
    printf("d. Jumlah nasabah yang menggunakan ATM Setor Tunai: %d\n", total_setor_tunai);
    printf("e. Jumlah nasabah yang menggunakan ATM Non Tunai: %d\n", total_non_tunai);
    printf("f. Jumlah nasabah yang menggunakan ATM Setor Tunai untuk transaksi Non Tunai: %d\n", total_non_tunai_setor_tunai);
    printf("g. Jumlah nasabah yang ditolak karena melebihi maksimal jumlah antrian: %d\n", total_rejected);
    printf("h. Total waktu pelayanan terhadap 1000 nasabah: %d menit\n", total_service_time);

    return 0;
}
