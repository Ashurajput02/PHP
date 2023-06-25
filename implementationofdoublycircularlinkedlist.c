#include<stdio.h>
#include<stdlib.h>
struct node{
int data;
struct node* prev;
struct node *next;
};
struct node* head;
struct node*tail;
 void create(int x){
    struct node *temp=(struct node*)malloc(sizeof(struct node));
temp->data=x;
temp->prev=NULL;
temp->next=NULL;
if(head==NULL){
    head=tail=temp;
    temp->prev=head;
    temp->next=head;

 }
 else{
    temp->prev=tail;
    tail->next=temp;
    tail=temp;
    tail->next=head;
    head->prev=tail;

 }
 }
  void printer()
  {
    struct node*temp=head;
    while(temp->next!=tail->next){
        printf("%d ",temp->data);
        temp=temp->next;
    }
    printf("%d",temp->data);
  }

  void begin(int x){
    struct node *temp=(struct node*)malloc(sizeof(struct node));
    temp->data=x;
    temp->prev=NULL;
    temp->next=NULL;
    if(head==NULL){
        head=tail=temp;
    temp->prev=head;
    temp->next=head;

  }
  else{
    head->prev=temp;
    temp->next=head;
    temp->prev=tail;
    tail->next=temp;
    head=temp;

  }
  }
  void insertat(int n,int x){
    
    struct node *noni=(struct node*)malloc(sizeof(struct node));
    noni->data=x;
    noni->prev=NULL;
    noni->next=NULL;
    struct node *temp=head;
    for(int i=0;i<n-1;i++){
temp=temp->next;
    }
    (temp->prev)->next=noni;
    noni->prev=(temp->prev);
    noni->next=temp;
  }
    
    
int main()
{
create(5);

create(6);
create(7);
create(-1);
printer();
printf("\n");
begin(8);
begin(9);
create(3);
printer();

insertat(4,0);
printf("\n");

printer();

return 0;

}