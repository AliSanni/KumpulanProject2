#include <iostream>
using namespace std;

void printArray(int arr[], int n);
void bubbleSort(int arr[], int n);
void selectionSort(int arr[], int n);
void insertionSort(int arr[], int n);

int main() {
    int arrB[5] = {64, 34, 25, 12, 22};
    int sb = sizeof(arrB) / sizeof(arrB[0]);

    cout << "Sebelum sorting Bubble Sort" << endl;
    printArray(arrB, sb);
    bubbleSort(arrB, sb);
    cout << "Setelah sorting Bubble Sort" << endl;
    printArray(arrB, sb);
    cout << endl;

    int arrS[5] = {64, 34, 25, 12, 22};
    int ss = sizeof(arrS) / sizeof(arrS[0]);

    cout << "Sebelum sorting Selection Sort" << endl;
    printArray(arrS, ss);
    selectionSort(arrS, ss);
    cout << "Setelah sorting Selection Sort" << endl;
    printArray(arrS, ss);
    cout << endl;

    int arrI[5] = {64, 34, 25, 12, 22};
    int si = sizeof(arrI) / sizeof(arrI[0]);

    cout << "Sebelum sorting Insertion Sort" << endl;
    printArray(arrI, si);
    insertionSort(arrI, si);
    cout << "Setelah sorting Insertion Sort" << endl;
    printArray(arrI, si);
    cout << endl;

    return 0;
}

// Fungsi menampilkan array
void printArray(int arr[], int n) {
    for (int i = 0; i < n; i++) {
        cout << arr[i] << " ";
    }
    cout << endl;
}

// Insertion Sort
void insertionSort(int arr[], int n) {
    int i, j, key;
    for (i = 1; i < n; i++) {
        key = arr[i];
        j = i - 1;
       
        while (j >= 0 && arr[j] > key) {
            arr[j + 1] = arr[j];
            j = j - 1;
        }
        arr[j + 1] = key;
    }
}

// Selection Sort
void selectionSort(int arr[], int n) {
    int i, j, minIndex, tmp;
    for (i = 0; i < n - 1; i++) {
        minIndex = i;
        for (j = i + 1; j < n; j++) {
            if (arr[j] < arr[minIndex]) {
                minIndex = j;
            }
        }
        if (minIndex != i) {
            tmp = arr[i];
            arr[i] = arr[minIndex];
            arr[minIndex] = tmp;
        }
    }
}

// Bubble Sort
void bubbleSort(int arr[], int n) {
    int i, j, tmp;
    for (i = 0; i < n; i++) {
        for (j = 0; j < n - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                tmp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = tmp;
            }
        }
    }
}